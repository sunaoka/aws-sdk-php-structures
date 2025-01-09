<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseManagerReportGenerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseManagerReportGeneratorArn
 */
class GetLicenseManagerReportGeneratorRequest extends Request
{
    /**
     * @param array{LicenseManagerReportGeneratorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
