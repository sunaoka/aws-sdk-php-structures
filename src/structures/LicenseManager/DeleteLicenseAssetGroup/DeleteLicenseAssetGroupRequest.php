<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteLicenseAssetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseAssetGroupArn
 */
class DeleteLicenseAssetGroupRequest extends Request
{
    /**
     * @param array{LicenseAssetGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
