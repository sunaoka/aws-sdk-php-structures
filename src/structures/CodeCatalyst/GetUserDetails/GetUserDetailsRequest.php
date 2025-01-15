<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetUserDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $id
 * @property string|null $userName
 */
class GetUserDetailsRequest extends Request
{
    /**
     * @param array{
     *     id?: string|null,
     *     userName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
