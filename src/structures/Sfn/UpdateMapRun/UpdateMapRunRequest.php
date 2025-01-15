<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateMapRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mapRunArn
 * @property int<0, max>|null $maxConcurrency
 * @property float|null $toleratedFailurePercentage
 * @property int<0, max>|null $toleratedFailureCount
 */
class UpdateMapRunRequest extends Request
{
    /**
     * @param array{
     *     mapRunArn: string,
     *     maxConcurrency?: int<0, max>|null,
     *     toleratedFailurePercentage?: float|null,
     *     toleratedFailureCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
