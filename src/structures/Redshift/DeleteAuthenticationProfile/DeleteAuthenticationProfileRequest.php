<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteAuthenticationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationProfileName
 */
class DeleteAuthenticationProfileRequest extends Request
{
    /**
     * @param array{AuthenticationProfileName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
