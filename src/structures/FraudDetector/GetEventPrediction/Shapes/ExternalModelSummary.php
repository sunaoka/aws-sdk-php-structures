<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $modelEndpoint
 * @property 'SAGEMAKER'|null $modelSource
 */
class ExternalModelSummary extends Shape
{
    /**
     * @param array{
     *     modelEndpoint?: string|null,
     *     modelSource?: 'SAGEMAKER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
