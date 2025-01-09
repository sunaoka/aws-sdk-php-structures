<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformBranches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Attribute
 * @property string $Operator
 * @property list<string> $Values
 */
class SearchFilter extends Shape
{
    /**
     * @param array{
     *     Attribute?: string,
     *     Operator?: string,
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
