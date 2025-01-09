<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property 'BUILDING'|'READY'|'READY_BASIC_TESTING'|'FAILED'|'NOT_BUILT' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property string $version
 */
class BotMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     status?: 'BUILDING'|'READY'|'READY_BASIC_TESTING'|'FAILED'|'NOT_BUILT',
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
