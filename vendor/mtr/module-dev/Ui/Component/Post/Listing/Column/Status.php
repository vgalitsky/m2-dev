<?php
namespace Mtr\Dev\Ui\Component\Post\Listing\Column;

class Status implements 
\Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        $options = [];
        $options[] = ['label' => 'Enabled', 'value' => '1'];
        $options[] = ['label' => 'Disabled', 'value' => '2'];
        $options[] = ['label' => 'Archived', 'value' => '3'];
        return $options;
    }
}