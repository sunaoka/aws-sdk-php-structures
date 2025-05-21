<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockFoundationModelContextEnrichmentConfiguration|null $bedrockFoundationModelConfiguration
 * @property 'BEDROCK_FOUNDATION_MODEL' $type
 */
class ContextEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockFoundationModelConfiguration?: BedrockFoundationModelContextEnrichmentConfiguration|null,
     *     type: 'BEDROCK_FOUNDATION_MODEL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
