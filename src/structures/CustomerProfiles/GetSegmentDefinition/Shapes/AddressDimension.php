<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProfileDimension|null $City
 * @property ProfileDimension|null $Country
 * @property ProfileDimension|null $County
 * @property ProfileDimension|null $PostalCode
 * @property ProfileDimension|null $Province
 * @property ProfileDimension|null $State
 */
class AddressDimension extends Shape
{
    /**
     * @param array{
     *     City?: ProfileDimension|null,
     *     Country?: ProfileDimension|null,
     *     County?: ProfileDimension|null,
     *     PostalCode?: ProfileDimension|null,
     *     Province?: ProfileDimension|null,
     *     State?: ProfileDimension|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
