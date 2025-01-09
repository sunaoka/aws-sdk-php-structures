<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConversionTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseConversionTaskId
 */
class GetLicenseConversionTaskRequest extends Request
{
    /**
     * @param array{LicenseConversionTaskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
