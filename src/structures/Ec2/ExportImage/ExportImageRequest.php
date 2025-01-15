<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property 'VMDK'|'RAW'|'VHD' $DiskImageFormat
 * @property bool|null $DryRun
 * @property string $ImageId
 * @property Shapes\ExportTaskS3LocationRequest $S3ExportLocation
 * @property string|null $RoleName
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class ExportImageRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     DiskImageFormat: 'VMDK'|'RAW'|'VHD',
     *     DryRun?: bool|null,
     *     ImageId: string,
     *     S3ExportLocation: Shapes\ExportTaskS3LocationRequest,
     *     RoleName?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
