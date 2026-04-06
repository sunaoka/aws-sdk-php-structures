<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'microfocus'|'bluage' $engineType
 * @property string $engineVersion
 * @property string $environmentArn
 * @property string $environmentId
 * @property string $instanceType
 * @property string $name
 * @property 'ipv4'|'dual'|null $networkType
 * @property 'Creating'|'Available'|'Updating'|'Deleting'|'Failed'|'UnHealthy' $status
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     creationTime: \Aws\Api\DateTimeResult,
     *     engineType: 'microfocus'|'bluage',
     *     engineVersion: string,
     *     environmentArn: string,
     *     environmentId: string,
     *     instanceType: string,
     *     name: string,
     *     networkType?: 'ipv4'|'dual'|null,
     *     status: 'Creating'|'Available'|'Updating'|'Deleting'|'Failed'|'UnHealthy'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
