<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property list<string> $ResourceArns
 */
class DisassociateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     ResourceArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
