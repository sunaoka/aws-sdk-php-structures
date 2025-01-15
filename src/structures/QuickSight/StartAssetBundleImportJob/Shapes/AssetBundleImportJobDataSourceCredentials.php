<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetBundleImportJobDataSourceCredentialPair|null $CredentialPair
 * @property string|null $SecretArn
 */
class AssetBundleImportJobDataSourceCredentials extends Shape
{
    /**
     * @param array{
     *     CredentialPair?: AssetBundleImportJobDataSourceCredentialPair|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
