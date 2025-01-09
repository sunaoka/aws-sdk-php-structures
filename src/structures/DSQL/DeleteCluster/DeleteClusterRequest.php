<?php

namespace Sunaoka\Aws\Structures\DSQL\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string $clientToken
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
