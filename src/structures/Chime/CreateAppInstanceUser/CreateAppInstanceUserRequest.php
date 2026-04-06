<?php

namespace Sunaoka\Aws\Structures\Chime\CreateAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string $AppInstanceUserId
 * @property string $Name
 * @property string|null $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
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
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
