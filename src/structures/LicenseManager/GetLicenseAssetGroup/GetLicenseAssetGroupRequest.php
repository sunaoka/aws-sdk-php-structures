<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseAssetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseAssetGroupArn
 */
class GetLicenseAssetGroupRequest extends Request
{
    /**
     * @param array{LicenseAssetGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
