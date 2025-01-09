<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StdOutS3Uri
 * @property string $StdErrorS3Uri
 * @property string $ResultS3Uri
 * @property string $ResultType
 */
class CalculationResult extends Shape
{
    /**
     * @param array{
     *     StdOutS3Uri?: string,
     *     StdErrorS3Uri?: string,
     *     ResultS3Uri?: string,
     *     ResultType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
