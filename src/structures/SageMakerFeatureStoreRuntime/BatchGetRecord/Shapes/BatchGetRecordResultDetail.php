<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchGetRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierValueAsString
 * @property list<FeatureValue> $Record
 * @property string $ExpiresAt
 */
class BatchGetRecordResultDetail extends Shape
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifierValueAsString: string,
     *     Record: list<FeatureValue>,
     *     ExpiresAt?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
