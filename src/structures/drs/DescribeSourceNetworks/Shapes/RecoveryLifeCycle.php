<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $apiCallDateTime
 * @property string $jobID
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'SUCCESS'|'FAIL'|'PARTIAL_SUCCESS'|'ASSOCIATE_SUCCESS'|'ASSOCIATE_FAIL' $lastRecoveryResult
 */
class RecoveryLifeCycle extends Shape
{
    /**
     * @param array{
     *     apiCallDateTime?: \Aws\Api\DateTimeResult,
     *     jobID?: string,
     *     lastRecoveryResult?: 'NOT_STARTED'|'IN_PROGRESS'|'SUCCESS'|'FAIL'|'PARTIAL_SUCCESS'|'ASSOCIATE_SUCCESS'|'ASSOCIATE_FAIL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
