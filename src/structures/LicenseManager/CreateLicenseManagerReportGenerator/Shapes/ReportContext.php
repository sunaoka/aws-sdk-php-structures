<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateLicenseManagerReportGenerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $licenseConfigurationArns
 */
class ReportContext extends Shape
{
    /**
     * @param array{licenseConfigurationArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
