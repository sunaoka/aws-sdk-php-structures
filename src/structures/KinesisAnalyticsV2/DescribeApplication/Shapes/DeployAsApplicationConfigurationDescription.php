<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ContentBaseLocationDescription $S3ContentLocationDescription
 */
class DeployAsApplicationConfigurationDescription extends Shape
{
    /**
     * @param array{S3ContentLocationDescription: S3ContentBaseLocationDescription} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
