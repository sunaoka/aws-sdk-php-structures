<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string|null $Name
 * @property string|null $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\Configuration $Configuration
 */
class CreateAppInstanceBotRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     Name?: string|null,
     *     Metadata?: string|null,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     Configuration: Shapes\Configuration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
