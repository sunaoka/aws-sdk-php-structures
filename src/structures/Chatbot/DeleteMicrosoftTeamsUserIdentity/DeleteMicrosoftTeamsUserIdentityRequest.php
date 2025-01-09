<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteMicrosoftTeamsUserIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $UserId
 */
class DeleteMicrosoftTeamsUserIdentityRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
