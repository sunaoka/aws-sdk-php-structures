<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateAuthenticationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationProfileName
 * @property string $AuthenticationProfileContent
 */
class CreateAuthenticationProfileRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationProfileName: string,
     *     AuthenticationProfileContent: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
