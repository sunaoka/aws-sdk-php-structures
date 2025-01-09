<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'SUCCEEDED'|'PROCESSING'|'DELETING'|'DELETED' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property ErrorDetail $errorDetail
 */
class GroupStatusDetail extends Shape
{
    /**
     * @param array{
     *     status?: 'FAILED'|'SUCCEEDED'|'PROCESSING'|'DELETING'|'DELETED',
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     errorDetail?: ErrorDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
