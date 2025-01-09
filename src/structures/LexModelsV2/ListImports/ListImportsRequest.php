<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property Shapes\ImportSortBy $sortBy
 * @property list<Shapes\ImportFilter> $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property string $localeId
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     botId?: string,
     *     botVersion?: string,
     *     sortBy?: Shapes\ImportSortBy,
     *     filters?: list<Shapes\ImportFilter>,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     localeId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
