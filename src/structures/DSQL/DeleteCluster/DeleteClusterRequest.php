<?php

namespace Sunaoka\Aws\Structures\DSQL\DeleteCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $clientToken
 */
class DeleteClusterRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
