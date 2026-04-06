<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\FleetConfiguration|null $configuration
 * @property string|null $description
 * @property string|null $displayName
 * @property string $farmId
 * @property string $fleetId
 * @property int<0, 2147483647>|null $maxWorkerCount
 * @property int<0, 2147483647>|null $minWorkerCount
 * @property string|null $roleArn
 */
class UpdateFleetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     configuration?: Shapes\FleetConfiguration|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     farmId: string,
     *     fleetId: string,
     *     maxWorkerCount?: int<0, 2147483647>|null,
     *     minWorkerCount?: int<0, 2147483647>|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
