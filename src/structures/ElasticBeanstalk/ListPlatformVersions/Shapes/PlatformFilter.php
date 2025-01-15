<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Operator
 * @property list<string>|null $Values
 */
class PlatformFilter extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Operator?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
