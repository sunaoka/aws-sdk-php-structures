<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannelFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property list<Shapes\Processor> $Processors
 * @property string $Name
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientRequestToken
 */
class CreateChannelFlowRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     Processors: list<Shapes\Processor>,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
