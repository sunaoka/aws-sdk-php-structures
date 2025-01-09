<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationEfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Subdirectory
 * @property string $EfsFilesystemArn
 * @property Shapes\Ec2Config $Ec2Config
 * @property list<Shapes\TagListEntry> $Tags
 * @property string $AccessPointArn
 * @property string $FileSystemAccessRoleArn
 * @property 'NONE'|'TLS1_2' $InTransitEncryption
 */
class CreateLocationEfsRequest extends Request
{
    /**
     * @param array{
     *     Subdirectory?: string,
     *     EfsFilesystemArn: string,
     *     Ec2Config: Shapes\Ec2Config,
     *     Tags?: list<Shapes\TagListEntry>,
     *     AccessPointArn?: string,
     *     FileSystemAccessRoleArn?: string,
     *     InTransitEncryption?: 'NONE'|'TLS1_2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
