<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetId
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListTestSetRecordsRequest extends Request
{
    /**
     * @param array{
     *     testSetId: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
