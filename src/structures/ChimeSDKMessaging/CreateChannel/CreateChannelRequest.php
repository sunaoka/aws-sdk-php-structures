<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string $Name
 * @property 'UNRESTRICTED'|'RESTRICTED'|null $Mode
 * @property 'PUBLIC'|'PRIVATE'|null $Privacy
 * @property string|null $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 * @property string $ChimeBearer
 * @property string|null $ChannelId
 * @property list<string>|null $MemberArns
 * @property list<string>|null $ModeratorArns
 * @property Shapes\ElasticChannelConfiguration|null $ElasticChannelConfiguration
 * @property Shapes\ExpirationSettings|null $ExpirationSettings
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     Name: string,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED'|null,
     *     Privacy?: 'PUBLIC'|'PRIVATE'|null,
     *     Metadata?: string|null,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ChimeBearer: string,
     *     ChannelId?: string|null,
     *     MemberArns?: list<string>|null,
     *     ModeratorArns?: list<string>|null,
     *     ElasticChannelConfiguration?: Shapes\ElasticChannelConfiguration|null,
     *     ExpirationSettings?: Shapes\ExpirationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
