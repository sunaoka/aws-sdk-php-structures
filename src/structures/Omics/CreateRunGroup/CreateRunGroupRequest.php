<?php

namespace Sunaoka\Aws\Structures\Omics\CreateRunGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property int<1, 100000>|null $maxCpus
 * @property int<1, 100000>|null $maxRuns
 * @property int<1, 100000>|null $maxDuration
 * @property array<string, string>|null $tags
 * @property string $requestId
 * @property int<1, 100000>|null $maxGpus
 */
class CreateRunGroupRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     maxCpus?: int<1, 100000>|null,
     *     maxRuns?: int<1, 100000>|null,
     *     maxDuration?: int<1, 100000>|null,
     *     tags?: array<string, string>|null,
     *     requestId: string,
     *     maxGpus?: int<1, 100000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
