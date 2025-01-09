<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateRunGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $name
 * @property int $maxCpus
 * @property int $maxRuns
 * @property int $maxDuration
 * @property int $maxGpus
 */
class UpdateRunGroupRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     maxCpus?: int,
     *     maxRuns?: int,
     *     maxDuration?: int,
     *     maxGpus?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
