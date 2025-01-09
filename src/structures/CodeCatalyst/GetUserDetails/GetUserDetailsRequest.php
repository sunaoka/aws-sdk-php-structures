<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetUserDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $userName
 */
class GetUserDetailsRequest extends Request
{
    /**
     * @param array{
     *     id?: string,
     *     userName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
