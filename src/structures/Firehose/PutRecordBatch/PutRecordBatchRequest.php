<?php

namespace Sunaoka\Aws\Structures\Firehose\PutRecordBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property list<Shapes\Record> $Records
 */
class PutRecordBatchRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     Records: list<Shapes\Record>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
