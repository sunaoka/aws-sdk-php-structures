<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationAzureBlob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerUrl
 * @property 'SAS' $AuthenticationType
 * @property Shapes\AzureBlobSasConfiguration|null $SasConfiguration
 * @property 'BLOCK'|null $BlobType
 * @property 'HOT'|'COOL'|'ARCHIVE'|null $AccessTier
 * @property string|null $Subdirectory
 * @property list<string> $AgentArns
 * @property list<Shapes\TagListEntry>|null $Tags
 */
class CreateLocationAzureBlobRequest extends Request
{
    /**
     * @param array{
     *     ContainerUrl: string,
     *     AuthenticationType: 'SAS',
     *     SasConfiguration?: Shapes\AzureBlobSasConfiguration|null,
     *     BlobType?: 'BLOCK'|null,
     *     AccessTier?: 'HOT'|'COOL'|'ARCHIVE'|null,
     *     Subdirectory?: string|null,
     *     AgentArns: list<string>,
     *     Tags?: list<Shapes\TagListEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
