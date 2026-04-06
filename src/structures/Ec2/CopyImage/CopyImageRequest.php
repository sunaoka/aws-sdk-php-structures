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
 * @property bool|null $CopyImageTags
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
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
     *     CopyImageTags?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
