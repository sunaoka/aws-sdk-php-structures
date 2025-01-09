<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationAzureBlob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string $Subdirectory
 * @property 'SAS' $AuthenticationType
 * @property Shapes\AzureBlobSasConfiguration $SasConfiguration
 * @property 'BLOCK' $BlobType
 * @property 'HOT'|'COOL'|'ARCHIVE' $AccessTier
 * @property list<string> $AgentArns
 */
class UpdateLocationAzureBlobRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string,
     *     AuthenticationType?: 'SAS',
     *     SasConfiguration?: Shapes\AzureBlobSasConfiguration,
     *     BlobType?: 'BLOCK',
     *     AccessTier?: 'HOT'|'COOL'|'ARCHIVE',
     *     AgentArns?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
