<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $KmsDataKeyReusePeriodSeconds
 * @property string|null $KmsMasterKeyId
 * @property string|null $QueueName
 * @property string|null $DeadLetterTargetArn
 */
class AwsSqsQueueDetails extends Shape
{
    /**
     * @param array{
     *     KmsDataKeyReusePeriodSeconds?: int|null,
     *     KmsMasterKeyId?: string|null,
     *     QueueName?: string|null,
     *     DeadLetterTargetArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
