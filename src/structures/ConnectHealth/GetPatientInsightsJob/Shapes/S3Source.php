<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetPatientInsightsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 */
class S3Source extends Shape
{
    /**
     * @param array{uri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
