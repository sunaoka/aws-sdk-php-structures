<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $Email
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     Email?: string|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
