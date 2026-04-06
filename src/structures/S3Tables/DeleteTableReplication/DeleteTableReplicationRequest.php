<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableArn
 * @property string $versionToken
 */
class DeleteTableReplicationRequest extends Request
{
    /**
     * @param array{
     *     tableArn: string,
     *     versionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
