<?php

namespace Sunaoka\Aws\Structures\Iam\CreateServiceSpecificCredential;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $ServiceName
 */
class CreateServiceSpecificCredentialRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     ServiceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
