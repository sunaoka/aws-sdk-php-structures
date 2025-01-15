<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StdOutS3Uri
 * @property string|null $StdErrorS3Uri
 * @property string|null $ResultS3Uri
 * @property string|null $ResultType
 */
class CalculationResult extends Shape
{
    /**
     * @param array{
     *     StdOutS3Uri?: string|null,
     *     StdErrorS3Uri?: string|null,
     *     ResultS3Uri?: string|null,
     *     ResultType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
