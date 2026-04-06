<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PutRecordsRequestEntry> $Records
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property string|null $StreamId
 */
class PutRecordsRequest extends Request
{
    /**
     * @param array{
     *     Records: list<Shapes\PutRecordsRequestEntry>,
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
