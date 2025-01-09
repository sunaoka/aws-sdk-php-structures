<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetServiceSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableIntegration
 */
class OrganizationConfiguration extends Shape
{
    /**
     * @param array{EnableIntegration: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
