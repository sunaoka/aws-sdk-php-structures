<?php

namespace Sunaoka\Aws\Structures\Odb\StartDbNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudVmClusterId
 * @property string $dbNodeId
 */
class StartDbNodeRequest extends Request
{
    /**
     * @param array{
     *     cloudVmClusterId: string,
     *     dbNodeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
