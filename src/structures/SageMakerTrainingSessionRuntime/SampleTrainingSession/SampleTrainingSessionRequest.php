<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\SampleTrainingSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainingSessionName
 * @property string|null $contentType
 * @property string|null $accept
 * @property string|null $modelPackageArn
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $body
 */
class SampleTrainingSessionRequest extends Request
{
    /**
     * @param array{
     *     trainingSessionName: string,
     *     contentType?: string|null,
     *     accept?: string|null,
     *     modelPackageArn?: string|null,
     *     body?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
