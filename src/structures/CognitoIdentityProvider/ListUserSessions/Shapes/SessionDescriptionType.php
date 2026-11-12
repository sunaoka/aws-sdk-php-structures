<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SessionId
 * @property 'TOKEN'|'SSO'|null $SessionType
 * @property string|null $ClientId
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property \Aws\Api\DateTimeResult|null $LastActiveDate
 * @property string|null $DeviceType
 * @property string|null $LastIPAddress
 * @property SessionLocationType|null $LastLocation
 * @property string|null $OriginSessionId
 * @property bool|null $IsCurrentSession
 */
class SessionDescriptionType extends Shape
{
    /**
     * @param array{
     *     SessionId?: string|null,
     *     SessionType?: 'TOKEN'|'SSO'|null,
     *     ClientId?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     LastActiveDate?: \Aws\Api\DateTimeResult|null,
     *     DeviceType?: string|null,
     *     LastIPAddress?: string|null,
     *     LastLocation?: SessionLocationType|null,
     *     OriginSessionId?: string|null,
     *     IsCurrentSession?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
