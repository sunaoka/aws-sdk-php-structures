<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property Shapes\ImportSortBy $sortBy
 * @property list<Shapes\ImportFilter> $filters
 * @property int $maxResults
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
