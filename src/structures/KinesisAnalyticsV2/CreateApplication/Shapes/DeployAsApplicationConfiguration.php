<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ContentBaseLocation $S3ContentLocation
 */
class DeployAsApplicationConfiguration extends Shape
{
    /**
     * @param array{S3ContentLocation: S3ContentBaseLocation} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
