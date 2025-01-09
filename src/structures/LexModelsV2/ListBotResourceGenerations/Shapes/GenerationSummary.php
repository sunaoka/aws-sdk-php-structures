<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotResourceGenerations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $generationId
 * @property 'Failed'|'Complete'|'InProgress' $generationStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class GenerationSummary extends Shape
{
    /**
     * @param array{
     *     generationId?: string,
     *     generationStatus?: 'Failed'|'Complete'|'InProgress',
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
