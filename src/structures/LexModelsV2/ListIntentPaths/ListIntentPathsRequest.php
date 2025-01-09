<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentPaths;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property \Aws\Api\DateTimeResult $startDateTime
 * @property \Aws\Api\DateTimeResult $endDateTime
 * @property string $intentPath
 * @property list<Shapes\AnalyticsPathFilter> $filters
 */
class ListIntentPathsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     startDateTime: \Aws\Api\DateTimeResult,
     *     endDateTime: \Aws\Api\DateTimeResult,
     *     intentPath: string,
     *     filters?: list<Shapes\AnalyticsPathFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
