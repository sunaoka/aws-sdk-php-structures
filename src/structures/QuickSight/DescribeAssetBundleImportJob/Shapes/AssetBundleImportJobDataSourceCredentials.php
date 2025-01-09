<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAssetBundleImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssetBundleImportJobDataSourceCredentialPair $CredentialPair
 * @property string $SecretArn
 */
class AssetBundleImportJobDataSourceCredentials extends Shape
{
    /**
     * @param array{
     *     CredentialPair?: AssetBundleImportJobDataSourceCredentialPair,
     *     SecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
