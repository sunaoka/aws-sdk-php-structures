<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateChat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $userId
 * @property 'IAM'|'IDC'|'IDP'|null $userType
 */
class CreateChatRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     userId?: string|null,
     *     userType?: 'IAM'|'IDC'|'IDP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
