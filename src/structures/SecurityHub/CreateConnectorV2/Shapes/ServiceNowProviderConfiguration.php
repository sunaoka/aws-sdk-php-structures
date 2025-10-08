<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceName
 * @property string $ClientId
 * @property string $ClientSecret
 */
class ServiceNowProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceName: string,
     *     ClientId: string,
     *     ClientSecret: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
