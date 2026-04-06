<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetPatientInsightsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3OutputPath
 */
class OutputDataConfig extends Shape
{
    /**
     * @param array{s3OutputPath: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
