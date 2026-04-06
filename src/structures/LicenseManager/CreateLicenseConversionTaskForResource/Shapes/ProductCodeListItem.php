<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseConversionTaskForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductCodeId
 * @property 'marketplace' $ProductCodeType
 */
class ProductCodeListItem extends Shape
{
    /**
     * @param array{
     *     ProductCodeId: string,
     *     ProductCodeType: 'marketplace'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
