<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplateAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AliasName
 * @property string $Arn
 * @property int $TemplateVersionNumber
 */
class TemplateAlias extends Shape
{
    /**
     * @param array{
     *     AliasName?: string,
     *     Arn?: string,
     *     TemplateVersionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
