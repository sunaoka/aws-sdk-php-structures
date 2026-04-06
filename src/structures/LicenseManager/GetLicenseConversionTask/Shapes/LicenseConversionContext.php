<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConversionTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UsageOperation
 */
class LicenseConversionContext extends Shape
{
    /**
     * @param array{UsageOperation?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
