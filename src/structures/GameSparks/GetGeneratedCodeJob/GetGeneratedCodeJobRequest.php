<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetGeneratedCodeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property string $JobId
 * @property string $SnapshotId
 */
class GetGeneratedCodeJobRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     JobId: string,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
