<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceBotArn
 */
class DescribeAppInstanceBotRequest extends Request
{
    /**
     * @param array{AppInstanceBotArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
