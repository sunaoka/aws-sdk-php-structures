<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseAssetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UsageDimension
 */
class LicenseAssetGroupConfiguration extends Shape
{
    /**
     * @param array{UsageDimension?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
