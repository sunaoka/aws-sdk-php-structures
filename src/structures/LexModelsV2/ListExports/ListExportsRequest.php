<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property Shapes\ExportSortBy $sortBy
 * @property list<Shapes\ExportFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 * @property string $localeId
 */
class ListExportsRequest extends Request
{
    /**
     * @param array{
     *     botId?: string,
     *     botVersion?: string,
     *     sortBy?: Shapes\ExportSortBy,
     *     filters?: list<Shapes\ExportFilter>,
     *     maxResults?: int,
     *     nextToken?: string,
     *     localeId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
