<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateOriginRequestPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property OriginRequestPolicyConfig $OriginRequestPolicyConfig
 */
class OriginRequestPolicy extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     OriginRequestPolicyConfig: OriginRequestPolicyConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
