<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipelineVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineArn
 * @property int<1, max> $PipelineVersionId
 * @property string|null $PipelineVersionDisplayName
 * @property string|null $PipelineVersionDescription
 */
class UpdatePipelineVersionRequest extends Request
{
    /**
     * @param array{
     *     PipelineArn: string,
     *     PipelineVersionId: int<1, max>,
     *     PipelineVersionDisplayName?: string|null,
     *     PipelineVersionDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
