<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateDistributionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ECR' $service
 * @property string $repositoryName
 */
class TargetContainerRepository extends Shape
{
    /**
     * @param array{
     *     service: 'ECR',
     *     repositoryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
