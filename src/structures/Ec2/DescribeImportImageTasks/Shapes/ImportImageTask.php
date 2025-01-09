<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportImageTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Architecture
 * @property string $Description
 * @property bool $Encrypted
 * @property string $Hypervisor
 * @property string $ImageId
 * @property string $ImportTaskId
 * @property string $KmsKeyId
 * @property string $LicenseType
 * @property string $Platform
 * @property string $Progress
 * @property list<SnapshotDetail> $SnapshotDetails
 * @property string $Status
 * @property string $StatusMessage
 * @property list<Tag> $Tags
 * @property list<ImportImageLicenseConfigurationResponse> $LicenseSpecifications
 * @property string $UsageOperation
 * @property 'legacy-bios'|'uefi'|'uefi-preferred' $BootMode
 */
class ImportImageTask extends Shape
{
    /**
     * @param array{
     *     Architecture?: string,
     *     Description?: string,
     *     Encrypted?: bool,
     *     Hypervisor?: string,
     *     ImageId?: string,
     *     ImportTaskId?: string,
     *     KmsKeyId?: string,
     *     LicenseType?: string,
     *     Platform?: string,
     *     Progress?: string,
     *     SnapshotDetails?: list<SnapshotDetail>,
     *     Status?: string,
     *     StatusMessage?: string,
     *     Tags?: list<Tag>,
     *     LicenseSpecifications?: list<ImportImageLicenseConfigurationResponse>,
     *     UsageOperation?: string,
     *     BootMode?: 'legacy-bios'|'uefi'|'uefi-preferred'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
