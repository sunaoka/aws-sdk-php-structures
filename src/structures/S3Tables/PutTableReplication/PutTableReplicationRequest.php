<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableArn
 * @property string|null $versionToken
 * @property Shapes\TableReplicationConfiguration $configuration
 */
class PutTableReplicationRequest extends Request
{
    /**
     * @param array{
     *     tableArn: string,
     *     versionToken?: string|null,
     *     configuration: Shapes\TableReplicationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
