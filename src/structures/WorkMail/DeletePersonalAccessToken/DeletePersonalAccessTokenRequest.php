<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeletePersonalAccessToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $PersonalAccessTokenId
 */
class DeletePersonalAccessTokenRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     PersonalAccessTokenId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
