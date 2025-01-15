<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Logs|null $s3Logs
 */
class Logging extends Shape
{
    /**
     * @param array{s3Logs?: S3Logs|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
