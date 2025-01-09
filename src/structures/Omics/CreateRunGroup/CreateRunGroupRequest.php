<?php

namespace Sunaoka\Aws\Structures\Omics\CreateRunGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int $maxCpus
 * @property int $maxRuns
 * @property int $maxDuration
 * @property array<string, string> $tags
 * @property string $requestId
 * @property int $maxGpus
 */
class CreateRunGroupRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     maxCpus?: int,
     *     maxRuns?: int,
     *     maxDuration?: int,
     *     tags?: array<string, string>,
     *     requestId: string,
     *     maxGpus?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
