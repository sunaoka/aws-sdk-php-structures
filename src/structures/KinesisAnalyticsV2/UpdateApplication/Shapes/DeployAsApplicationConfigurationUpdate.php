<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ContentBaseLocationUpdate $S3ContentLocationUpdate
 */
class DeployAsApplicationConfigurationUpdate extends Shape
{
    /**
     * @param array{S3ContentLocationUpdate?: S3ContentBaseLocationUpdate} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
