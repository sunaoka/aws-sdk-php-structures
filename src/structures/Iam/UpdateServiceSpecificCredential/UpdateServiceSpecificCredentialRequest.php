<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateServiceSpecificCredential;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string $ServiceSpecificCredentialId
 * @property 'Active'|'Inactive'|'Expired' $Status
 */
class UpdateServiceSpecificCredentialRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     ServiceSpecificCredentialId: string,
     *     Status: 'Active'|'Inactive'|'Expired'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
