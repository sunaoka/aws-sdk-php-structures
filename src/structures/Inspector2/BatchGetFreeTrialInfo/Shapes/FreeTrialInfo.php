<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFreeTrialInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'|'CODE_REPOSITORY' $type
 * @property \Aws\Api\DateTimeResult $start
 * @property \Aws\Api\DateTimeResult $end
 * @property 'ACTIVE'|'INACTIVE' $status
 */
class FreeTrialInfo extends Shape
{
    /**
     * @param array{
     *     type: 'EC2'|'ECR'|'LAMBDA'|'LAMBDA_CODE'|'CODE_REPOSITORY',
     *     start: \Aws\Api\DateTimeResult,
     *     end: \Aws\Api\DateTimeResult,
     *     status: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
