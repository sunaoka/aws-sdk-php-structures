<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotResourceGenerations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\GenerationSortBy $sortBy
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListBotResourceGenerationsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     sortBy?: Shapes\GenerationSortBy,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
