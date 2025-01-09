<?php

namespace Sunaoka\Aws\Structures\Chime\CreateAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string $AppInstanceUserId
 * @property string $Name
 * @property string $Metadata
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
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
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
