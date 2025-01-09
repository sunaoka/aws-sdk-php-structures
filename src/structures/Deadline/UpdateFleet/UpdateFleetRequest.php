<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $fleetId
 * @property string $displayName
 * @property string $description
 * @property string $roleArn
 * @property int $minWorkerCount
 * @property int $maxWorkerCount
 * @property Shapes\FleetConfiguration $configuration
 */
class UpdateFleetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     fleetId: string,
     *     displayName?: string,
     *     description?: string,
     *     roleArn?: string,
     *     minWorkerCount?: int,
     *     maxWorkerCount?: int,
     *     configuration?: Shapes\FleetConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
