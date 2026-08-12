<?php

namespace Sunaoka\Aws\Structures\Odb\StopDbNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cloudVmClusterId
 * @property string|null $exadbVmClusterId
 * @property string $dbNodeId
 */
class StopDbNodeRequest extends Request
{
    /**
     * @param array{
     *     cloudVmClusterId?: string|null,
     *     exadbVmClusterId?: string|null,
     *     dbNodeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
