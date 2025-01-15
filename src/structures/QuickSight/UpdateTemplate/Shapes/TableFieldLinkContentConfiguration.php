<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableFieldCustomTextContent|null $CustomTextContent
 * @property TableFieldCustomIconContent|null $CustomIconContent
 */
class TableFieldLinkContentConfiguration extends Shape
{
    /**
     * @param array{
     *     CustomTextContent?: TableFieldCustomTextContent|null,
     *     CustomIconContent?: TableFieldCustomIconContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
