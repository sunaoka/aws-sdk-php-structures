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
 * @property 'Creating'|'Available'|'Updating'|'Deleting'|'Failed' $status
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
     *     status: 'Creating'|'Available'|'Updating'|'Deleting'|'Failed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
