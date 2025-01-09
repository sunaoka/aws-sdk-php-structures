<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property list<ExternalSource> $sources
 * @property ExternalSourcesGenerationConfiguration $generationConfiguration
 */
class ExternalSourcesRetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     sources: list<ExternalSource>,
     *     generationConfiguration?: ExternalSourcesGenerationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
