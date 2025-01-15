<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOntap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FsxProtocol $Protocol
 * @property list<string> $SecurityGroupArns
 * @property string $StorageVirtualMachineArn
 * @property string|null $Subdirectory
 * @property list<Shapes\TagListEntry>|null $Tags
 */
class CreateLocationFsxOntapRequest extends Request
{
    /**
     * @param array{
     *     Protocol: Shapes\FsxProtocol,
     *     SecurityGroupArns: list<string>,
     *     StorageVirtualMachineArn: string,
     *     Subdirectory?: string|null,
     *     Tags?: list<Shapes\TagListEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
