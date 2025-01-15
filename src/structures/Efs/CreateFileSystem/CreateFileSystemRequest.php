<?php

namespace Sunaoka\Aws\Structures\Efs\CreateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreationToken
 * @property 'generalPurpose'|'maxIO'|null $PerformanceMode
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property 'bursting'|'provisioned'|'elastic'|null $ThroughputMode
 * @property double|null $ProvisionedThroughputInMibps
 * @property string|null $AvailabilityZoneName
 * @property bool|null $Backup
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     CreationToken: string,
     *     PerformanceMode?: 'generalPurpose'|'maxIO'|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     ThroughputMode?: 'bursting'|'provisioned'|'elastic'|null,
     *     ProvisionedThroughputInMibps?: double|null,
     *     AvailabilityZoneName?: string|null,
     *     Backup?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
