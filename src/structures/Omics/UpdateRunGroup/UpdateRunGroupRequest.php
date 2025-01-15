<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateRunGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property int<1, 100000>|null $maxCpus
 * @property int<1, 100000>|null $maxRuns
 * @property int<1, 100000>|null $maxDuration
 * @property int<1, 100000>|null $maxGpus
 */
class UpdateRunGroupRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     maxCpus?: int<1, 100000>|null,
     *     maxRuns?: int<1, 100000>|null,
     *     maxDuration?: int<1, 100000>|null,
     *     maxGpus?: int<1, 100000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
