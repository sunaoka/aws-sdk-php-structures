<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateRoleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleAlias
 * @property string|null $roleArn
 * @property int<900, 43200>|null $credentialDurationSeconds
 */
class UpdateRoleAliasRequest extends Request
{
    /**
     * @param array{
     *     roleAlias: string,
     *     roleArn?: string|null,
     *     credentialDurationSeconds?: int<900, 43200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
