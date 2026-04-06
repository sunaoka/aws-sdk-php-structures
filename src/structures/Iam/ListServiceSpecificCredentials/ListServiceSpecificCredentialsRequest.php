<?php

namespace Sunaoka\Aws\Structures\Iam\ListServiceSpecificCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string|null $ServiceName
 */
class ListServiceSpecificCredentialsRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     ServiceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
