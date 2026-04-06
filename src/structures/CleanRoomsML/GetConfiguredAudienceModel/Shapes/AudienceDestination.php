<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredAudienceModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ConfigMap $s3Destination
 */
class AudienceDestination extends Shape
{
    /**
     * @param array{s3Destination: S3ConfigMap} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
