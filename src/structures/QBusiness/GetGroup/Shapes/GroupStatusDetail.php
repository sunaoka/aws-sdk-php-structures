<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'SUCCEEDED'|'PROCESSING'|'DELETING'|'DELETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property ErrorDetail|null $errorDetail
 */
class GroupStatusDetail extends Shape
{
    /**
     * @param array{
     *     status?: 'FAILED'|'SUCCEEDED'|'PROCESSING'|'DELETING'|'DELETED'|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     errorDetail?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
