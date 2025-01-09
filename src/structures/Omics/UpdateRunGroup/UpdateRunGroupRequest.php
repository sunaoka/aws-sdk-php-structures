<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateRunGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $name
 * @property int<1, 100000> $maxCpus
 * @property int<1, 100000> $maxRuns
 * @property int<1, 100000> $maxDuration
 * @property int<1, 100000> $maxGpus
 */
class UpdateRunGroupRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     maxCpus?: int<1, 100000>,
     *     maxRuns?: int<1, 100000>,
     *     maxDuration?: int<1, 100000>,
     *     maxGpus?: int<1, 100000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
