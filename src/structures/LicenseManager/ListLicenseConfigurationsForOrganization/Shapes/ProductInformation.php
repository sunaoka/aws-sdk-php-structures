<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurationsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property list<ProductInformationFilter> $ProductInformationFilterList
 */
class ProductInformation extends Shape
{
    /**
     * @param array{
     *     ResourceType: string,
     *     ProductInformationFilterList: list<ProductInformationFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
