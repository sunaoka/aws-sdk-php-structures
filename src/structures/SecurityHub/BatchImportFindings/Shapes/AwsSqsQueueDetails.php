<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $KmsDataKeyReusePeriodSeconds
 * @property string $KmsMasterKeyId
 * @property string $QueueName
 * @property string $DeadLetterTargetArn
 */
class AwsSqsQueueDetails extends Shape
{
    /**
     * @param array{
     *     KmsDataKeyReusePeriodSeconds?: int,
     *     KmsMasterKeyId?: string,
     *     QueueName?: string,
     *     DeadLetterTargetArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
