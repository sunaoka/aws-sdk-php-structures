<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchGetRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureGroupName
 * @property list<string> $RecordIdentifiersValueAsString
 * @property list<string>|null $FeatureNames
 */
class BatchGetRecordIdentifier extends Shape
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifiersValueAsString: list<string>,
     *     FeatureNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
