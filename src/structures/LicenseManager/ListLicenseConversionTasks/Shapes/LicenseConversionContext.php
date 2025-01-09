<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConversionTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UsageOperation
 */
class LicenseConversionContext extends Shape
{
    /**
     * @param array{UsageOperation?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
