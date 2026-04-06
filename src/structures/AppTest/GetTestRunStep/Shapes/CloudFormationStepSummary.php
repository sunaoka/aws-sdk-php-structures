<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateCloudFormationSummary|null $createCloudformation
 * @property DeleteCloudFormationSummary|null $deleteCloudformation
 */
class CloudFormationStepSummary extends Shape
{
    /**
     * @param array{
     *     createCloudformation?: CreateCloudFormationSummary|null,
     *     deleteCloudformation?: DeleteCloudFormationSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
