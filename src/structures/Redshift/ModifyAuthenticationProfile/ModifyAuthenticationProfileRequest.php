<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyAuthenticationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationProfileName
 * @property string $AuthenticationProfileContent
 */
class ModifyAuthenticationProfileRequest extends Request
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
