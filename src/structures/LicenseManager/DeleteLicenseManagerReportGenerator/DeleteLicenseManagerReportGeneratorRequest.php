<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicenseManagerReportGenerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseManagerReportGeneratorArn
 */
class DeleteLicenseManagerReportGeneratorRequest extends Request
{
    /**
     * @param array{LicenseManagerReportGeneratorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
