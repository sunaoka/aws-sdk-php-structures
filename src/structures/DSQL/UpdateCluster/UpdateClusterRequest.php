<?php

namespace Sunaoka\Aws\Structures\DSQL\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property bool $deletionProtectionEnabled
 * @property string $clientToken
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     deletionProtectionEnabled?: bool,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
