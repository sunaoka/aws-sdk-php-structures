<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformBranches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Attribute
 * @property string|null $Operator
 * @property list<string>|null $Values
 */
class SearchFilter extends Shape
{
    /**
     * @param array{
     *     Attribute?: string|null,
     *     Operator?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
