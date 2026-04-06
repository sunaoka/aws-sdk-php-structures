<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetPersonalAccessTokenMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $PersonalAccessTokenId
 */
class GetPersonalAccessTokenMetadataRequest extends Request
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
