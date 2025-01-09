<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateRoleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleAlias
 * @property string $roleArn
 * @property int<900, 43200> $credentialDurationSeconds
 */
class UpdateRoleAliasRequest extends Request
{
    /**
     * @param array{
     *     roleAlias: string,
     *     roleArn?: string,
     *     credentialDurationSeconds?: int<900, 43200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
