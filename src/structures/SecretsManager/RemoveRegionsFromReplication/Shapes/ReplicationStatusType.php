<?php

namespace Sunaoka\Aws\Structures\SecretsManager\RemoveRegionsFromReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string $KmsKeyId
 * @property 'InSync'|'Failed'|'InProgress' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $LastAccessedDate
 */
class ReplicationStatusType extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     KmsKeyId?: string,
     *     Status?: 'InSync'|'Failed'|'InProgress',
     *     StatusMessage?: string,
     *     LastAccessedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
