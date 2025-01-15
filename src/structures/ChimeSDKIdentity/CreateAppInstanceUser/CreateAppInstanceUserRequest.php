<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string $AppInstanceUserId
 * @property string $Name
 * @property string|null $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ExpirationSettings|null $ExpirationSettings
 */
class CreateAppInstanceUserRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     AppInstanceUserId: string,
     *     Name: string,
     *     Metadata?: string|null,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ExpirationSettings?: Shapes\ExpirationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
