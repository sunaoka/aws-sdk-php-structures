<?php

namespace Sunaoka\Aws\Structures\MachineLearning\UpdateMLModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MLModelId
 * @property string|null $MLModelName
 * @property float|null $ScoreThreshold
 */
class UpdateMLModelRequest extends Request
{
    /**
     * @param array{
     *     MLModelId: string,
     *     MLModelName?: string|null,
     *     ScoreThreshold?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
