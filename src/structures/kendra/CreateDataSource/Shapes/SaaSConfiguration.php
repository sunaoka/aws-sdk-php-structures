<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationName
 * @property string $HostUrl
 */
class SaaSConfiguration extends Shape
{
    /**
     * @param array{
     *     OrganizationName: string,
     *     HostUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
