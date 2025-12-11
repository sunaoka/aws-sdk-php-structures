<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Arial'|'Courier New'|'Georgia'|'Times New Roman'|'Trebuchet'|'Verdana'|null $Default
 */
class FontFamily extends Shape
{
    /**
     * @param array{Default?: 'Arial'|'Courier New'|'Georgia'|'Times New Roman'|'Trebuchet'|'Verdana'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
