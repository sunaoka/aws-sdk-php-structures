<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListTestSetRecordsRequest extends Request
{
    /**
     * @param array{
     *     testSetId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
