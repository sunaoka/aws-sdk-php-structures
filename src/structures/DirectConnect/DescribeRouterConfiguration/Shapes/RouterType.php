<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeRouterConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vendor
 * @property string $platform
 * @property string $software
 * @property string $xsltTemplateName
 * @property string $xsltTemplateNameForMacSec
 * @property string $routerTypeIdentifier
 */
class RouterType extends Shape
{
    /**
     * @param array{
     *     vendor?: string,
     *     platform?: string,
     *     software?: string,
     *     xsltTemplateName?: string,
     *     xsltTemplateNameForMacSec?: string,
     *     routerTypeIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
