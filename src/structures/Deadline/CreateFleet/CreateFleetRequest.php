<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $displayName
 * @property string $description
 * @property string $roleArn
 * @property int<0, 2147483647> $minWorkerCount
 * @property int<0, 2147483647> $maxWorkerCount
 * @property Shapes\FleetConfiguration $configuration
 * @property array<string, string> $tags
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     displayName: string,
     *     description?: string,
     *     roleArn: string,
     *     minWorkerCount?: int<0, 2147483647>,
     *     maxWorkerCount: int<0, 2147483647>,
     *     configuration: Shapes\FleetConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
