<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInIntents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $localeId
 * @property Shapes\BuiltInIntentSortBy $sortBy
 * @property int<20, 20> $maxResults
 * @property string $nextToken
 */
class ListBuiltInIntentsRequest extends Request
{
    /**
     * @param array{
     *     localeId: string,
     *     sortBy?: Shapes\BuiltInIntentSortBy,
     *     maxResults?: int<20, 20>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
