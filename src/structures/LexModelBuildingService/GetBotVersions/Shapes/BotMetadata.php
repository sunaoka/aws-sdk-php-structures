<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property 'BUILDING'|'READY'|'READY_BASIC_TESTING'|'FAILED'|'NOT_BUILT'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property string|null $version
 */
class BotMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     status?: 'BUILDING'|'READY'|'READY_BASIC_TESTING'|'FAILED'|'NOT_BUILT'|null,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
