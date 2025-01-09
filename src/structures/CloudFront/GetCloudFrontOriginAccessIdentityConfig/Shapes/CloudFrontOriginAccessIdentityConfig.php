<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCloudFrontOriginAccessIdentityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerReference
 * @property string $Comment
 */
class CloudFrontOriginAccessIdentityConfig extends Shape
{
    /**
     * @param array{
     *     CallerReference: string,
     *     Comment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
