<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateKeyspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property Shapes\ReplicationSpecification $replicationSpecification
 * @property Shapes\ClientSideTimestamps|null $clientSideTimestamps
 */
class UpdateKeyspaceRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     replicationSpecification: Shapes\ReplicationSpecification,
     *     clientSideTimestamps?: Shapes\ClientSideTimestamps|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
