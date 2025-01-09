<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableFieldCustomTextContent $CustomTextContent
 * @property TableFieldCustomIconContent $CustomIconContent
 */
class TableFieldLinkContentConfiguration extends Shape
{
    /**
     * @param array{
     *     CustomTextContent?: TableFieldCustomTextContent,
     *     CustomIconContent?: TableFieldCustomIconContent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
