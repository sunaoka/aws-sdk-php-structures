<?php

namespace Sunaoka\Aws\Structures\Omics\CreateRunGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int<1, 100000> $maxCpus
 * @property int<1, 100000> $maxRuns
 * @property int<1, 100000> $maxDuration
 * @property array<string, string> $tags
 * @property string $requestId
 * @property int<1, 100000> $maxGpus
 */
class CreateRunGroupRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     maxCpus?: int<1, 100000>,
     *     maxRuns?: int<1, 100000>,
     *     maxDuration?: int<1, 100000>,
     *     tags?: array<string, string>,
     *     requestId: string,
     *     maxGpus?: int<1, 100000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
