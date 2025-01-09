<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationAzureBlob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerUrl
 * @property 'SAS' $AuthenticationType
 * @property Shapes\AzureBlobSasConfiguration $SasConfiguration
 * @property 'BLOCK' $BlobType
 * @property 'HOT'|'COOL'|'ARCHIVE' $AccessTier
 * @property string $Subdirectory
 * @property list<string> $AgentArns
 * @property list<Shapes\TagListEntry> $Tags
 */
class CreateLocationAzureBlobRequest extends Request
{
    /**
     * @param array{
     *     ContainerUrl: string,
     *     AuthenticationType: 'SAS',
     *     SasConfiguration?: Shapes\AzureBlobSasConfiguration,
     *     BlobType?: 'BLOCK',
     *     AccessTier?: 'HOT'|'COOL'|'ARCHIVE',
     *     Subdirectory?: string,
     *     AgentArns: list<string>,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
