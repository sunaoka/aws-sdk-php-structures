<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\UpdateAppInstanceBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceBotArn
 * @property string $Name
 * @property string $Metadata
 * @property Shapes\Configuration $Configuration
 */
class UpdateAppInstanceBotRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceBotArn: string,
     *     Name: string,
     *     Metadata: string,
     *     Configuration?: Shapes\Configuration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
