<?php

namespace Sunaoka\Aws\Structures\MachineLearning\Predict;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MLModelId
 * @property array<string, string> $Record
 * @property string $PredictEndpoint
 */
class PredictRequest extends Request
{
    /**
     * @param array{
     *     MLModelId: string,
     *     Record: array<string, string>,
     *     PredictEndpoint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
