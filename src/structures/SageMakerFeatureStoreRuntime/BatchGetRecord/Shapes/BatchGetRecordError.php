<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchGetRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierValueAsString
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class BatchGetRecordError extends Shape
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifierValueAsString: string,
     *     ErrorCode: string,
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
