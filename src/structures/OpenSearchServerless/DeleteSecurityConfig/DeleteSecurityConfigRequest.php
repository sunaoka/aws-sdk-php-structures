<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteSecurityConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $id
 */
class DeleteSecurityConfigRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
