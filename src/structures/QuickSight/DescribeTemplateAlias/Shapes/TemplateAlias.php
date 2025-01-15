<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AliasName
 * @property string|null $Arn
 * @property int<1, max>|null $TemplateVersionNumber
 */
class TemplateAlias extends Shape
{
    /**
     * @param array{
     *     AliasName?: string|null,
     *     Arn?: string|null,
     *     TemplateVersionNumber?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
