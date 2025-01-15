<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportImageTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Architecture
 * @property string|null $Description
 * @property bool|null $Encrypted
 * @property string|null $Hypervisor
 * @property string|null $ImageId
 * @property string|null $ImportTaskId
 * @property string|null $KmsKeyId
 * @property string|null $LicenseType
 * @property string|null $Platform
 * @property string|null $Progress
 * @property list<SnapshotDetail>|null $SnapshotDetails
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property list<Tag>|null $Tags
 * @property list<ImportImageLicenseConfigurationResponse>|null $LicenseSpecifications
 * @property string|null $UsageOperation
 * @property 'legacy-bios'|'uefi'|'uefi-preferred'|null $BootMode
 */
class ImportImageTask extends Shape
{
    /**
     * @param array{
     *     Architecture?: string|null,
     *     Description?: string|null,
     *     Encrypted?: bool|null,
     *     Hypervisor?: string|null,
     *     ImageId?: string|null,
     *     ImportTaskId?: string|null,
     *     KmsKeyId?: string|null,
     *     LicenseType?: string|null,
     *     Platform?: string|null,
     *     Progress?: string|null,
     *     SnapshotDetails?: list<SnapshotDetail>|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null,
     *     Tags?: list<Tag>|null,
     *     LicenseSpecifications?: list<ImportImageLicenseConfigurationResponse>|null,
     *     UsageOperation?: string|null,
     *     BootMode?: 'legacy-bios'|'uefi'|'uefi-preferred'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
