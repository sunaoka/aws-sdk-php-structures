<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredAudienceModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 */
class S3ConfigMap extends Shape
{
    /**
     * @param array{s3Uri: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
