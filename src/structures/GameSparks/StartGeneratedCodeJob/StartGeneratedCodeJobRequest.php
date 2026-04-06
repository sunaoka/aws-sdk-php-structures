<?php

namespace Sunaoka\Aws\Structures\GameSparks\StartGeneratedCodeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property Shapes\Generator $Generator
 * @property string $SnapshotId
 */
class StartGeneratedCodeJobRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     Generator: Shapes\Generator,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
