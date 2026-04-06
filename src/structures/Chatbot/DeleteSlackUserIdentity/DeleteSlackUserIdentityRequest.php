<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteSlackUserIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $SlackTeamId
 * @property string $SlackUserId
 */
class DeleteSlackUserIdentityRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn: string,
     *     SlackTeamId: string,
     *     SlackUserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
