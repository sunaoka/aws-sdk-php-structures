<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $displayName
 * @property string|null $description
 * @property string $roleArn
 * @property int<0, 2147483647>|null $minWorkerCount
 * @property int<0, 2147483647> $maxWorkerCount
 * @property Shapes\FleetConfiguration $configuration
 * @property array<string, string>|null $tags
 * @property Shapes\HostConfiguration|null $hostConfiguration
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     displayName: string,
     *     description?: string|null,
     *     roleArn: string,
     *     minWorkerCount?: int<0, 2147483647>|null,
     *     maxWorkerCount: int<0, 2147483647>,
     *     configuration: Shapes\FleetConfiguration,
     *     tags?: array<string, string>|null,
     *     hostConfiguration?: Shapes\HostConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
