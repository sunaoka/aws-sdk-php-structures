<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CompleteResourceTokenAuth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UserIdentifier $userIdentifier
 * @property string $sessionUri
 */
class CompleteResourceTokenAuthRequest extends Request
{
    /**
     * @param array{
     *     userIdentifier: Shapes\UserIdentifier,
     *     sessionUri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
