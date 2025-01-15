<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseSpecificationsForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LicenseConfigurationArn
 * @property string|null $AmiAssociationScope
 */
class LicenseSpecification extends Shape
{
    /**
     * @param array{
     *     LicenseConfigurationArn: string,
     *     AmiAssociationScope?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
