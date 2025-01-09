<?php

namespace Sunaoka\Aws\Structures\Iam\ListServiceSpecificCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $ServiceName
 */
class ListServiceSpecificCredentialsRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string,
     *     ServiceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
