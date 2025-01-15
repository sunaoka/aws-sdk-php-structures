<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInIntents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $localeId
 * @property Shapes\BuiltInIntentSortBy|null $sortBy
 * @property int<20, 20>|null $maxResults
 * @property string|null $nextToken
 */
class ListBuiltInIntentsRequest extends Request
{
    /**
     * @param array{
     *     localeId: string,
     *     sortBy?: Shapes\BuiltInIntentSortBy|null,
     *     maxResults?: int<20, 20>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
