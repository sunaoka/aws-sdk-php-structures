<?php

namespace Sunaoka\Aws\Structures\Efs\CreateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreationToken
 * @property 'generalPurpose'|'maxIO' $PerformanceMode
 * @property bool $Encrypted
 * @property string $KmsKeyId
 * @property 'bursting'|'provisioned'|'elastic' $ThroughputMode
 * @property double $ProvisionedThroughputInMibps
 * @property string $AvailabilityZoneName
 * @property bool $Backup
 * @property list<Shapes\Tag> $Tags
 */
class CreateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     CreationToken: string,
     *     PerformanceMode?: 'generalPurpose'|'maxIO',
     *     Encrypted?: bool,
     *     KmsKeyId?: string,
     *     ThroughputMode?: 'bursting'|'provisioned'|'elastic',
     *     ProvisionedThroughputInMibps?: double,
     *     AvailabilityZoneName?: string,
     *     Backup?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
