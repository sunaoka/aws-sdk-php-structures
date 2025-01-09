<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DeleteAppInstanceBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceBotArn
 */
class DeleteAppInstanceBotRequest extends Request
{
    /**
     * @param array{AppInstanceBotArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
