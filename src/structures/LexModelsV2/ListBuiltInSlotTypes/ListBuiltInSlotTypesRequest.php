<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInSlotTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $localeId
 * @property Shapes\BuiltInSlotTypeSortBy|null $sortBy
 * @property int<20, 20>|null $maxResults
 * @property string|null $nextToken
 */
class ListBuiltInSlotTypesRequest extends Request
{
    /**
     * @param array{
     *     localeId: string,
     *     sortBy?: Shapes\BuiltInSlotTypeSortBy|null,
     *     maxResults?: int<20, 20>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
