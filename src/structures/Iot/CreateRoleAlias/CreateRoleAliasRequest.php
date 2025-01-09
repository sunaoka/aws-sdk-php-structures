<?php

namespace Sunaoka\Aws\Structures\Iot\CreateRoleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleAlias
 * @property string $roleArn
 * @property int<900, 43200> $credentialDurationSeconds
 * @property list<Shapes\Tag> $tags
 */
class CreateRoleAliasRequest extends Request
{
    /**
     * @param array{
     *     roleAlias: string,
     *     roleArn: string,
     *     credentialDurationSeconds?: int<900, 43200>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
