<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurationsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductInformationFilterName
 * @property list<string>|null $ProductInformationFilterValue
 * @property string $ProductInformationFilterComparator
 */
class ProductInformationFilter extends Shape
{
    /**
     * @param array{
     *     ProductInformationFilterName: string,
     *     ProductInformationFilterValue?: list<string>|null,
     *     ProductInformationFilterComparator: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
