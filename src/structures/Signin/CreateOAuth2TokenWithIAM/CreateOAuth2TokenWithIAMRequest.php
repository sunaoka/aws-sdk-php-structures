<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2TokenWithIAM;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $grantType
 * @property string $resource
 */
class CreateOAuth2TokenWithIAMRequest extends Request
{
    /**
     * @param array{
     *     grantType: string,
     *     resource: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
