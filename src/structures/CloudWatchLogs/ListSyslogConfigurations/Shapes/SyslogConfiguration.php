<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListSyslogConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupArn
 * @property 'VPCE'|null $sourceType
 * @property string|null $vpcEndpointId
 * @property int<0, max>|null $createdAt
 */
class SyslogConfiguration extends Shape
{
    /**
     * @param array{
     *     logGroupArn?: string|null,
     *     sourceType?: 'VPCE'|null,
     *     vpcEndpointId?: string|null,
     *     createdAt?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
