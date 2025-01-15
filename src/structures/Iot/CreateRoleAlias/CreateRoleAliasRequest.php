<?php

namespace Sunaoka\Aws\Structures\Iot\CreateRoleAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleAlias
 * @property string $roleArn
 * @property int<900, 43200>|null $credentialDurationSeconds
 * @property list<Shapes\Tag>|null $tags
 */
class CreateRoleAliasRequest extends Request
{
    /**
     * @param array{
     *     roleAlias: string,
     *     roleArn: string,
     *     credentialDurationSeconds?: int<900, 43200>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
