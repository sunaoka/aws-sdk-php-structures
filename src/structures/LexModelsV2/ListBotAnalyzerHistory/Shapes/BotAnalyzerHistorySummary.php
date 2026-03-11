<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAnalyzerHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Processing'|'Available'|'Failed'|'Stopping'|'Stopped' $botAnalyzerStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property string $botAnalyzerRequestId
 */
class BotAnalyzerHistorySummary extends Shape
{
    /**
     * @param array{
     *     botAnalyzerStatus: 'Processing'|'Available'|'Failed'|'Stopping'|'Stopped',
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     botAnalyzerRequestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
