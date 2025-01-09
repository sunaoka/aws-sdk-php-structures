<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string $Name
 * @property string $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\Configuration $Configuration
 */
class CreateAppInstanceBotRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     Name?: string,
     *     Metadata?: string,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>,
     *     Configuration: Shapes\Configuration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
