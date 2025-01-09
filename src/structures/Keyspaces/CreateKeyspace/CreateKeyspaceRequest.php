<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateKeyspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property list<Shapes\Tag> $tags
 * @property Shapes\ReplicationSpecification $replicationSpecification
 */
class CreateKeyspaceRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     tags?: list<Shapes\Tag>,
     *     replicationSpecification?: Shapes\ReplicationSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
