<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Description
 * @property 'VMDK'|'RAW'|'VHD' $DiskImageFormat
 * @property bool $DryRun
 * @property string $ImageId
 * @property Shapes\ExportTaskS3LocationRequest $S3ExportLocation
 * @property string $RoleName
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class ExportImageRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Description?: string,
     *     DiskImageFormat: 'VMDK'|'RAW'|'VHD',
     *     DryRun?: bool,
     *     ImageId: string,
     *     S3ExportLocation: Shapes\ExportTaskS3LocationRequest,
     *     RoleName?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
