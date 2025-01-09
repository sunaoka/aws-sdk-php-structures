<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportImage;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\SnapshotDetail> $SnapshotDetails
 * @property string $Status
 * @property string $StatusMessage
 * @property list<Shapes\ImportImageLicenseConfigurationResponse> $LicenseSpecifications
 * @property list<Shapes\Tag> $Tags
 * @property string $UsageOperation
 */
class ImportImageResponse extends Response
{
}
