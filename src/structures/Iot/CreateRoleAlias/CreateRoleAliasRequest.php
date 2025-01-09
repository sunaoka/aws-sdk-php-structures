<?php

namespace Sunaoka\Aws\Structures\Iot\CreateRoleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleAlias
 * @property string $roleArn
 * @property int $credentialDurationSeconds
 * @property list<Shapes\Tag> $tags
 */
class CreateRoleAliasRequest extends Request
{
    /**
     * @param array{
     *     roleAlias: string,
     *     roleArn: string,
     *     credentialDurationSeconds?: int,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
