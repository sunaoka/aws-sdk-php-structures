<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property Shapes\ImportSortBy|null $sortBy
 * @property list<Shapes\ImportFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $localeId
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     botId?: string|null,
     *     botVersion?: string|null,
     *     sortBy?: Shapes\ImportSortBy|null,
     *     filters?: list<Shapes\ImportFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     localeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
