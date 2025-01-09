<?php

namespace Sunaoka\Aws\Structures\MachineLearning\UpdateMLModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MLModelId
 * @property string $MLModelName
 * @property float $ScoreThreshold
 */
class UpdateMLModelRequest extends Request
{
    /**
     * @param array{
     *     MLModelId: string,
     *     MLModelName?: string,
     *     ScoreThreshold?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
