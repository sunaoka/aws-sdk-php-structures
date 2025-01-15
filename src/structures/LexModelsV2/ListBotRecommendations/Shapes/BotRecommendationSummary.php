<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Processing'|'Deleting'|'Deleted'|'Downloading'|'Updating'|'Available'|'Failed'|'Stopping'|'Stopped' $botRecommendationStatus
 * @property string $botRecommendationId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class BotRecommendationSummary extends Shape
{
    /**
     * @param array{
     *     botRecommendationStatus: 'Processing'|'Deleting'|'Deleted'|'Downloading'|'Updating'|'Available'|'Failed'|'Stopping'|'Stopped',
     *     botRecommendationId: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
