<?php

namespace Sunaoka\Aws\Structures\Ec2\CopyImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property string $Name
 * @property string $SourceImageId
 * @property string $SourceRegion
 * @property string|null $DestinationOutpostArn
 * @property bool|null $DryRun
 * @property bool|null $CopyImageTags
 */
class CopyImageRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     Name: string,
     *     SourceImageId: string,
     *     SourceRegion: string,
     *     DestinationOutpostArn?: string|null,
     *     DryRun?: bool|null,
     *     CopyImageTags?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
