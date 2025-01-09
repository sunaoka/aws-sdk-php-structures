<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AliasName
 * @property string $Arn
 * @property int<1, max> $TemplateVersionNumber
 */
class TemplateAlias extends Shape
{
    /**
     * @param array{
     *     AliasName?: string,
     *     Arn?: string,
     *     TemplateVersionNumber?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
