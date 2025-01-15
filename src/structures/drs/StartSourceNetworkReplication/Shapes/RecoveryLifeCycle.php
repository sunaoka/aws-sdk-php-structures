<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $apiCallDateTime
 * @property string|null $jobID
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'SUCCESS'|'FAIL'|'PARTIAL_SUCCESS'|'ASSOCIATE_SUCCESS'|'ASSOCIATE_FAIL'|null $lastRecoveryResult
 */
class RecoveryLifeCycle extends Shape
{
    /**
     * @param array{
     *     apiCallDateTime?: \Aws\Api\DateTimeResult|null,
     *     jobID?: string|null,
     *     lastRecoveryResult?: 'NOT_STARTED'|'IN_PROGRESS'|'SUCCESS'|'FAIL'|'PARTIAL_SUCCESS'|'ASSOCIATE_SUCCESS'|'ASSOCIATE_FAIL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
