<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListAssetsForLicenseAssetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseAssetGroupArn
 * @property string $AssetType
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListAssetsForLicenseAssetGroupRequest extends Request
{
    /**
     * @param array{
     *     LicenseAssetGroupArn: string,
     *     AssetType: string,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
