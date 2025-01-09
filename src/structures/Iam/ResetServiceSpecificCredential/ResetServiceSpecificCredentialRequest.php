<?php

namespace Sunaoka\Aws\Structures\Iam\ResetServiceSpecificCredential;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $ServiceSpecificCredentialId
 */
class ResetServiceSpecificCredentialRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string,
     *     ServiceSpecificCredentialId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
