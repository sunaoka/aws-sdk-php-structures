<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteServiceSpecificCredential;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $ServiceSpecificCredentialId
 */
class DeleteServiceSpecificCredentialRequest extends Request
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
