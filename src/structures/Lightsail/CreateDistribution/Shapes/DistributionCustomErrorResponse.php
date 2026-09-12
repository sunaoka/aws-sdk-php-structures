<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $errorCode
 * @property string|null $responseCode
 * @property string|null $responsePagePath
 * @property int|null $errorCachingMinTTL
 */
class DistributionCustomErrorResponse extends Shape
{
    /**
     * @param array{
     *     errorCode?: int|null,
     *     responseCode?: string|null,
     *     responsePagePath?: string|null,
     *     errorCachingMinTTL?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
