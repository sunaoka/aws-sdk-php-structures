<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateKeyspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\ReplicationSpecification|null $replicationSpecification
 */
class CreateKeyspaceRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     tags?: list<Shapes\Tag>|null,
     *     replicationSpecification?: Shapes\ReplicationSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
