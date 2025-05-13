<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $fleetId
 * @property string|null $displayName
 * @property string|null $description
 * @property string|null $roleArn
 * @property int<0, 2147483647>|null $minWorkerCount
 * @property int<0, 2147483647>|null $maxWorkerCount
 * @property Shapes\FleetConfiguration|null $configuration
 * @property Shapes\HostConfiguration|null $hostConfiguration
 */
class UpdateFleetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     fleetId: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     roleArn?: string|null,
     *     minWorkerCount?: int<0, 2147483647>|null,
     *     maxWorkerCount?: int<0, 2147483647>|null,
     *     configuration?: Shapes\FleetConfiguration|null,
     *     hostConfiguration?: Shapes\HostConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
