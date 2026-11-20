<?php

namespace Sunaoka\Aws\Structures\S3Tables\DisassociateTableReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableArn
 */
class DisassociateTableReplicationRequest extends Request
{
    /**
     * @param array{tableArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
