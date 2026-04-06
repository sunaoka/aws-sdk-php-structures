<?php

namespace Sunaoka\Aws\Structures\Iam\CreateServiceSpecificCredential;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $ServiceName
 * @property int<1, 36600>|null $CredentialAgeDays
 */
class CreateServiceSpecificCredentialRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     ServiceName: string,
     *     CredentialAgeDays?: int<1, 36600>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
