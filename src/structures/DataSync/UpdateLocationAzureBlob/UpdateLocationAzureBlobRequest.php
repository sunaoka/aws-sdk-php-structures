<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationAzureBlob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 * @property 'SAS'|null $AuthenticationType
 * @property Shapes\AzureBlobSasConfiguration|null $SasConfiguration
 * @property 'BLOCK'|null $BlobType
 * @property 'HOT'|'COOL'|'ARCHIVE'|null $AccessTier
 * @property list<string>|null $AgentArns
 */
class UpdateLocationAzureBlobRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null,
     *     AuthenticationType?: 'SAS'|null,
     *     SasConfiguration?: Shapes\AzureBlobSasConfiguration|null,
     *     BlobType?: 'BLOCK'|null,
     *     AccessTier?: 'HOT'|'COOL'|'ARCHIVE'|null,
     *     AgentArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
