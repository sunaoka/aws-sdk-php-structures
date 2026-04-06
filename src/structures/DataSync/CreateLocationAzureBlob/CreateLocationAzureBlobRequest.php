<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationAzureBlob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerUrl
 * @property 'SAS'|'NONE' $AuthenticationType
 * @property Shapes\AzureBlobSasConfiguration|null $SasConfiguration
 * @property 'BLOCK'|null $BlobType
 * @property 'HOT'|'COOL'|'ARCHIVE'|null $AccessTier
 * @property string|null $Subdirectory
 * @property list<string>|null $AgentArns
 * @property list<Shapes\TagListEntry>|null $Tags
 * @property Shapes\CmkSecretConfig|null $CmkSecretConfig
 * @property Shapes\CustomSecretConfig|null $CustomSecretConfig
 */
class CreateLocationAzureBlobRequest extends Request
{
    /**
     * @param array{
     *     ContainerUrl: string,
     *     AuthenticationType: 'SAS'|'NONE',
     *     SasConfiguration?: Shapes\AzureBlobSasConfiguration|null,
     *     BlobType?: 'BLOCK'|null,
     *     AccessTier?: 'HOT'|'COOL'|'ARCHIVE'|null,
     *     Subdirectory?: string|null,
     *     AgentArns?: list<string>|null,
     *     Tags?: list<Shapes\TagListEntry>|null,
     *     CmkSecretConfig?: Shapes\CmkSecretConfig|null,
     *     CustomSecretConfig?: Shapes\CustomSecretConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
