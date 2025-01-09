<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\GetDataAutomationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 */
class OutputConfiguration extends Shape
{
    /**
     * @param array{s3Uri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
