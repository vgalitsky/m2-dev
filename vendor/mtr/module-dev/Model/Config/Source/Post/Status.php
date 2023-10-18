<?php
namespace Mtr\Dev\Model\Config\Source;
use \Magento\Framework\Data\OptionSourceInterface;
class CustomSelect 
implements \Magento\Framework\Option\ArrayInterface //deprecated ?
//implements OptionSourceInterface
{
    protected $options = [];

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            0 => __('Disabled'), 
            1 => __('Enabled'),
            2 => __('Hidden'),
        ];
    }
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        if (!count($this->options)) {
            foreach ($this->toArray() as $value => $label) {
                $this->options[] = ['value' => $value, 'label' => $label];
            }
        }
        return $this->options;
    }

}