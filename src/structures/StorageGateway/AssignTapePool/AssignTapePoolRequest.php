<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AssignTapePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TapeARN
 * @property string $PoolId
 * @property bool $BypassGovernanceRetention
 */
class AssignTapePoolRequest extends Request
{
    /**
     * @param array{
     *     TapeARN: string,
     *     PoolId: string,
     *     BypassGovernanceRetention?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
