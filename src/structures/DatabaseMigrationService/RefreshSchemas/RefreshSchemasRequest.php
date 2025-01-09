<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\RefreshSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 * @property string $ReplicationInstanceArn
 */
class RefreshSchemasRequest extends Request
{
    /**
     * @param array{
     *     EndpointArn: string,
     *     ReplicationInstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
