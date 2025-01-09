<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PutRecordsRequestEntry> $Records
 * @property string $StreamName
 * @property string $StreamARN
 */
class PutRecordsRequest extends Request
{
    /**
     * @param array{
     *     Records: list<Shapes\PutRecordsRequestEntry>,
     *     StreamName?: string,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
