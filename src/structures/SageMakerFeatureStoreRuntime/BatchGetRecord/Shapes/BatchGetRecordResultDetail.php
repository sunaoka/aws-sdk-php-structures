<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchGetRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierValueAsString
 * @property list<FeatureValue> $Record
 * @property string|null $ExpiresAt
 */
class BatchGetRecordResultDetail extends Shape
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifierValueAsString: string,
     *     Record: list<FeatureValue>,
     *     ExpiresAt?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
