<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribePlatformVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'x86_64'|'arm64'|null $Architecture
 * @property string|null $ImageId
 */
class DefaultAmi extends Shape
{
    /**
     * @param array{
     *     Architecture?: 'x86_64'|'arm64'|null,
     *     ImageId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
