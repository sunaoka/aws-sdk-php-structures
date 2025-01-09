<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ValidationRole
 * @property list<ModelPackageValidationProfile> $ValidationProfiles
 */
class ModelPackageValidationSpecification extends Shape
{
    /**
     * @param array{
     *     ValidationRole: string,
     *     ValidationProfiles: list<ModelPackageValidationProfile>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
