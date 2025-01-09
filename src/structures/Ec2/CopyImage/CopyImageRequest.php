<?php

namespace Sunaoka\Aws\Structures\Ec2\CopyImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Description
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property string $Name
 * @property string $SourceImageId
 * @property string $SourceRegion
 * @property string $DestinationOutpostArn
 * @property bool $CopyImageTags
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CopyImageRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Description?: string,
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     Name: string,
     *     SourceImageId: string,
     *     SourceRegion: string,
     *     DestinationOutpostArn?: string,
     *     CopyImageTags?: bool,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
