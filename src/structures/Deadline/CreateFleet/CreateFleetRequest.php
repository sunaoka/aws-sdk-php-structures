<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\FleetConfiguration $configuration
 * @property string|null $description
 * @property string $displayName
 * @property string $farmId
 * @property int<0, 2147483647> $maxWorkerCount
 * @property int<0, 2147483647>|null $minWorkerCount
 * @property string $roleArn
 * @property array<string, string>|null $tags
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     configuration: Shapes\FleetConfiguration,
     *     description?: string|null,
     *     displayName: string,
     *     farmId: string,
     *     maxWorkerCount: int<0, 2147483647>,
     *     minWorkerCount?: int<0, 2147483647>|null,
     *     roleArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
