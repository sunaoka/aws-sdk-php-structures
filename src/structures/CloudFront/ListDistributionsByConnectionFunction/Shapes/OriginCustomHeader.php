<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByConnectionFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HeaderName
 * @property string $HeaderValue
 */
class OriginCustomHeader extends Shape
{
    /**
     * @param array{
     *     HeaderName: string,
     *     HeaderValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
