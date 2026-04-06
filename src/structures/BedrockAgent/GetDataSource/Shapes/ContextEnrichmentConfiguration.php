<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEDROCK_FOUNDATION_MODEL' $type
 * @property BedrockFoundationModelContextEnrichmentConfiguration|null $bedrockFoundationModelConfiguration
 */
class ContextEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'BEDROCK_FOUNDATION_MODEL',
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelContextEnrichmentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
