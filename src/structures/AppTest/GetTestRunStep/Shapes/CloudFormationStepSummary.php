<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateCloudFormationSummary $createCloudformation
 * @property DeleteCloudFormationSummary $deleteCloudformation
 */
class CloudFormationStepSummary extends Shape
{
    /**
     * @param array{
     *     createCloudformation?: CreateCloudFormationSummary,
     *     deleteCloudformation?: DeleteCloudFormationSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
