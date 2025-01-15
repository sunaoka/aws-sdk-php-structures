<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ModelPackageStatusItem> $ValidationStatuses
 * @property list<ModelPackageStatusItem>|null $ImageScanStatuses
 */
class ModelPackageStatusDetails extends Shape
{
    /**
     * @param array{
     *     ValidationStatuses: list<ModelPackageStatusItem>,
     *     ImageScanStatuses?: list<ModelPackageStatusItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
