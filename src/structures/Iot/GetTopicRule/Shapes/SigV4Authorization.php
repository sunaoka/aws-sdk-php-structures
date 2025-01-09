<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $signingRegion
 * @property string $serviceName
 * @property string $roleArn
 */
class SigV4Authorization extends Shape
{
    /**
     * @param array{
     *     signingRegion: string,
     *     serviceName: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
