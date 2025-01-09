<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string $AppInstanceUserId
 * @property string $Name
 * @property string $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\ExpirationSettings $ExpirationSettings
 */
class CreateAppInstanceUserRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     AppInstanceUserId: string,
     *     Name: string,
     *     Metadata?: string,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>,
     *     ExpirationSettings?: Shapes\ExpirationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
