<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelEndpoint
 * @property 'SAGEMAKER' $modelSource
 */
class ExternalModelSummary extends Shape
{
    /**
     * @param array{
     *     modelEndpoint?: string,
     *     modelSource?: 'SAGEMAKER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
