<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceName
 * @property string|null $ClientId
 * @property 'ACTIVE'|'FAILED' $AuthStatus
 */
class ServiceNowDetail extends Shape
{
    /**
     * @param array{
     *     InstanceName?: string|null,
     *     ClientId?: string|null,
     *     AuthStatus: 'ACTIVE'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
