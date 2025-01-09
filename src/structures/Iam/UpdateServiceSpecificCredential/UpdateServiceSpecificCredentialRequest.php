<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateServiceSpecificCredential;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $ServiceSpecificCredentialId
 * @property 'Active'|'Inactive' $Status
 */
class UpdateServiceSpecificCredentialRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string,
     *     ServiceSpecificCredentialId: string,
     *     Status: 'Active'|'Inactive'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
