<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Operator
 * @property list<string> $Values
 */
class PlatformFilter extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Operator?: string,
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
