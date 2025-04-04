<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $UserId
 * @property string|null $ClientRequestToken
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     UserId: string,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
