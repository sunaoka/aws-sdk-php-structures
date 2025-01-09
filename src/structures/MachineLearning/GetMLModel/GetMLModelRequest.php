<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetMLModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MLModelId
 * @property bool $Verbose
 */
class GetMLModelRequest extends Request
{
    /**
     * @param array{
     *     MLModelId: string,
     *     Verbose?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
