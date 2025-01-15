<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotResourceGenerations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $generationId
 * @property 'Failed'|'Complete'|'InProgress'|null $generationStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class GenerationSummary extends Shape
{
    /**
     * @param array{
     *     generationId?: string|null,
     *     generationStatus?: 'Failed'|'Complete'|'InProgress'|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
