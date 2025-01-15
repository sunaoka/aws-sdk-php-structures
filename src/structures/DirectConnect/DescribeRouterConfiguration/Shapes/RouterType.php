<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeRouterConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vendor
 * @property string|null $platform
 * @property string|null $software
 * @property string|null $xsltTemplateName
 * @property string|null $xsltTemplateNameForMacSec
 * @property string|null $routerTypeIdentifier
 */
class RouterType extends Shape
{
    /**
     * @param array{
     *     vendor?: string|null,
     *     platform?: string|null,
     *     software?: string|null,
     *     xsltTemplateName?: string|null,
     *     xsltTemplateNameForMacSec?: string|null,
     *     routerTypeIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
