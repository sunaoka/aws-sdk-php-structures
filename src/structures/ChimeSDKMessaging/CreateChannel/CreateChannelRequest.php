<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string $Name
 * @property 'UNRESTRICTED'|'RESTRICTED' $Mode
 * @property 'PUBLIC'|'PRIVATE' $Privacy
 * @property string $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 * @property string $ChimeBearer
 * @property string $ChannelId
 * @property list<string> $MemberArns
 * @property list<string> $ModeratorArns
 * @property Shapes\ElasticChannelConfiguration $ElasticChannelConfiguration
 * @property Shapes\ExpirationSettings $ExpirationSettings
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     Name: string,
     *     Mode?: 'UNRESTRICTED'|'RESTRICTED',
     *     Privacy?: 'PUBLIC'|'PRIVATE',
     *     Metadata?: string,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>,
     *     ChimeBearer: string,
     *     ChannelId?: string,
     *     MemberArns?: list<string>,
     *     ModeratorArns?: list<string>,
     *     ElasticChannelConfiguration?: Shapes\ElasticChannelConfiguration,
     *     ExpirationSettings?: Shapes\ExpirationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
