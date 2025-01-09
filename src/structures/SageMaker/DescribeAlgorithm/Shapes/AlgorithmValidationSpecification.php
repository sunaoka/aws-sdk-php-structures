<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ValidationRole
 * @property list<AlgorithmValidationProfile> $ValidationProfiles
 */
class AlgorithmValidationSpecification extends Shape
{
    /**
     * @param array{
     *     ValidationRole: string,
     *     ValidationProfiles: list<AlgorithmValidationProfile>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
