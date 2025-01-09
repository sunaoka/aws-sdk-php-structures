<?php

namespace Sunaoka\Aws\Structures\Firehose\PutRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryStreamName
 * @property Shapes\Record $Record
 */
class PutRecordRequest extends Request
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     Record: Shapes\Record
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
