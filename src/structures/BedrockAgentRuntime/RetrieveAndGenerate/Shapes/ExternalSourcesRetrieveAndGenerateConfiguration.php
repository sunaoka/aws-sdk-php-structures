<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalSourcesGenerationConfiguration|null $generationConfiguration
 * @property string $modelArn
 * @property list<ExternalSource> $sources
 */
class ExternalSourcesRetrieveAndGenerateConfiguration extends Shape
{
    /**
     * @param array{
     *     generationConfiguration?: ExternalSourcesGenerationConfiguration|null,
     *     modelArn: string,
     *     sources: list<ExternalSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
