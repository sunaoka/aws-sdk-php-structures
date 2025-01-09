<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateMapRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mapRunArn
 * @property int<0, max> $maxConcurrency
 * @property float $toleratedFailurePercentage
 * @property int<0, max> $toleratedFailureCount
 */
class UpdateMapRunRequest extends Request
{
    /**
     * @param array{
     *     mapRunArn: string,
     *     maxConcurrency?: int<0, max>,
     *     toleratedFailurePercentage?: float,
     *     toleratedFailureCount?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
