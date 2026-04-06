<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OriginAccessIdentity
 * @property int|null $OriginReadTimeout
 */
class S3OriginConfig extends Shape
{
    /**
     * @param array{
     *     OriginAccessIdentity: string,
     *     OriginReadTimeout?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
