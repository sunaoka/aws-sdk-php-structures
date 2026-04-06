<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationAzureBlob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 * @property 'SAS'|'NONE'|null $AuthenticationType
 * @property Shapes\AzureBlobSasConfiguration|null $SasConfiguration
 * @property 'BLOCK'|null $BlobType
 * @property 'HOT'|'COOL'|'ARCHIVE'|null $AccessTier
 * @property list<string>|null $AgentArns
 * @property Shapes\CmkSecretConfig|null $CmkSecretConfig
 * @property Shapes\CustomSecretConfig|null $CustomSecretConfig
 */
class UpdateLocationAzureBlobRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null,
     *     AuthenticationType?: 'SAS'|'NONE'|null,
     *     SasConfiguration?: Shapes\AzureBlobSasConfiguration|null,
     *     BlobType?: 'BLOCK'|null,
     *     AccessTier?: 'HOT'|'COOL'|'ARCHIVE'|null,
     *     AgentArns?: list<string>|null,
     *     CmkSecretConfig?: Shapes\CmkSecretConfig|null,
     *     CustomSecretConfig?: Shapes\CustomSecretConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
