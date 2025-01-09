<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOntap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FsxProtocol $Protocol
 * @property list<string> $SecurityGroupArns
 * @property string $StorageVirtualMachineArn
 * @property string $Subdirectory
 * @property list<Shapes\TagListEntry> $Tags
 */
class CreateLocationFsxOntapRequest extends Request
{
    /**
     * @param array{
     *     Protocol: Shapes\FsxProtocol,
     *     SecurityGroupArns: list<string>,
     *     StorageVirtualMachineArn: string,
     *     Subdirectory?: string,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
