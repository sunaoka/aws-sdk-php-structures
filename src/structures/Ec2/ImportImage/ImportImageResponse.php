<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportImage;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\SnapshotDetail>|null $SnapshotDetails
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property list<Shapes\ImportImageLicenseConfigurationResponse>|null $LicenseSpecifications
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $UsageOperation
 */
class ImportImageResponse extends Response
{
}
