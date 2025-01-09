<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProfileDimension $City
 * @property ProfileDimension $Country
 * @property ProfileDimension $County
 * @property ProfileDimension $PostalCode
 * @property ProfileDimension $Province
 * @property ProfileDimension $State
 */
class AddressDimension extends Shape
{
    /**
     * @param array{
     *     City?: ProfileDimension,
     *     Country?: ProfileDimension,
     *     County?: ProfileDimension,
     *     PostalCode?: ProfileDimension,
     *     Province?: ProfileDimension,
     *     State?: ProfileDimension
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
