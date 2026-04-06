<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableReplicationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableArn
 */
class GetTableReplicationStatusRequest extends Request
{
    /**
     * @param array{tableArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
