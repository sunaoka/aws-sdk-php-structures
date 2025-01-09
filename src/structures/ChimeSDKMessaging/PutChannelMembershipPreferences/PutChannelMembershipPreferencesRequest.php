<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutChannelMembershipPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelArn
 * @property string $MemberArn
 * @property string $ChimeBearer
 * @property Shapes\ChannelMembershipPreferences $Preferences
 */
class PutChannelMembershipPreferencesRequest extends Request
{
    /**
     * @param array{
     *     ChannelArn: string,
     *     MemberArn: string,
     *     ChimeBearer: string,
     *     Preferences: Shapes\ChannelMembershipPreferences
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
