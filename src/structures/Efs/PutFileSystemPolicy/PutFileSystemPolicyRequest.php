<?php

namespace Sunaoka\Aws\Structures\Efs\PutFileSystemPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string $Policy
 * @property bool $BypassPolicyLockoutSafetyCheck
 */
class PutFileSystemPolicyRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     Policy: string,
     *     BypassPolicyLockoutSafetyCheck?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
