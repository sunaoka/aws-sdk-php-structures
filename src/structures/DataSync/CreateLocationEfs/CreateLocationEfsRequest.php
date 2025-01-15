<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationEfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Subdirectory
 * @property string $EfsFilesystemArn
 * @property Shapes\Ec2Config $Ec2Config
 * @property list<Shapes\TagListEntry>|null $Tags
 * @property string|null $AccessPointArn
 * @property string|null $FileSystemAccessRoleArn
 * @property 'NONE'|'TLS1_2'|null $InTransitEncryption
 */
class CreateLocationEfsRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory?: string|null,
     *     EfsFilesystemArn: string,
     *     Ec2Config: Shapes\Ec2Config,
     *     Tags?: list<Shapes\TagListEntry>|null,
     *     AccessPointArn?: string|null,
     *     FileSystemAccessRoleArn?: string|null,
     *     InTransitEncryption?: 'NONE'|'TLS1_2'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
