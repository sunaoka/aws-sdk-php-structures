<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteSecurityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $clientToken
 */
class DeleteSecurityConfigRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
