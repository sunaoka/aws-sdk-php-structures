<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldForReranking> $fieldsToExclude
 * @property list<FieldForReranking> $fieldsToInclude
 */
class RerankingMetadataSelectiveModeConfiguration extends Shape
{
    /**
     * @param array{
     *     fieldsToExclude?: list<FieldForReranking>,
     *     fieldsToInclude?: list<FieldForReranking>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
