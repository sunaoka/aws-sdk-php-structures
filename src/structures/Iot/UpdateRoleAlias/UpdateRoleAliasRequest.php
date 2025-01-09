<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateRoleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleAlias
 * @property string $roleArn
 * @property int $credentialDurationSeconds
 */
class UpdateRoleAliasRequest extends Request
{
    /**
     * @param array{
     *     roleAlias: string,
     *     roleArn?: string,
     *     credentialDurationSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
