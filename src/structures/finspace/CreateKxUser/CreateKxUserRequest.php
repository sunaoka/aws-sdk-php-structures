<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $userName
 * @property string $iamRole
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateKxUserRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     userName: string,
     *     iamRole: string,
     *     tags?: array<string, string>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
