<?php

namespace Sunaoka\Aws\Structures\Iam\ResetServiceSpecificCredential;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string $ServiceSpecificCredentialId
 */
class ResetServiceSpecificCredentialRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     ServiceSpecificCredentialId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
