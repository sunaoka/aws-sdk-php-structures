<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInSlotTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $localeId
 * @property Shapes\BuiltInSlotTypeSortBy $sortBy
 * @property int<20, 20> $maxResults
 * @property string $nextToken
 */
class ListBuiltInSlotTypesRequest extends Request
{
    /**
     * @param array{
     *     localeId: string,
     *     sortBy?: Shapes\BuiltInSlotTypeSortBy,
     *     maxResults?: int<20, 20>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
