<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUSIVE'|'EXCLUSIVE' $DimensionType
 * @property list<'ACCOUNT_PROFILE'|'PROFILE'> $Values
 */
class ProfileTypeDimension extends Shape
{
    /**
     * @param array{
     *     DimensionType: 'INCLUSIVE'|'EXCLUSIVE',
     *     Values: list<'ACCOUNT_PROFILE'|'PROFILE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
