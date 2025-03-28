<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetStreamingDistributionConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $Bucket
 * @property string $Prefix
 */
class StreamingLoggingConfig extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Bucket: string,
     *     Prefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
