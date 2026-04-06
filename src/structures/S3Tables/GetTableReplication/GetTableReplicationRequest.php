<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableArn
 */
class GetTableReplicationRequest extends Request
{
    /**
     * @param array{tableArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
