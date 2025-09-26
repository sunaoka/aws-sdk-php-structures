<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property list<ExternalSource> $sources
 * @property ExternalSourcesGenerationConfiguration|null $generationConfiguration
 */
class ExternalSourcesRetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     sources: list<ExternalSource>,
     *     generationConfiguration?: ExternalSourcesGenerationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
