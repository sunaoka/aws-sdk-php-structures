<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateMapRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mapRunArn
 * @property int $maxConcurrency
 * @property float $toleratedFailurePercentage
 * @property int $toleratedFailureCount
 */
class UpdateMapRunRequest extends Request
{
    /**
     * @param array{
     *     mapRunArn: string,
     *     maxConcurrency?: int,
     *     toleratedFailurePercentage?: float,
     *     toleratedFailureCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
