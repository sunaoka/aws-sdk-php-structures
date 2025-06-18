<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFreeTrialInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $end
 * @property \Aws\Api\DateTimeResult $start
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property 'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'|'CODE_REPOSITORY' $type
 */
class FreeTrialInfo extends Shape
{
    /**
     * @param array{
     *     end: \Aws\Api\DateTimeResult,
     *     start: \Aws\Api\DateTimeResult,
     *     status: 'ACTIVE'|'INACTIVE',
     *     type: 'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'|'CODE_REPOSITORY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
