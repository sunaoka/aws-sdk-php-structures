<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConversionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UsageOperation
 * @property list<ProductCodeListItem>|null $ProductCodes
 */
class LicenseConversionContext extends Shape
{
    /**
     * @param array{
     *     UsageOperation?: string|null,
     *     ProductCodes?: list<ProductCodeListItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
