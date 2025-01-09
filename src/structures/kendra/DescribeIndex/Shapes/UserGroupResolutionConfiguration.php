<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_SSO'|'NONE' $UserGroupResolutionMode
 */
class UserGroupResolutionConfiguration extends Shape
{
    /**
     * @param array{UserGroupResolutionMode: 'AWS_SSO'|'NONE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
