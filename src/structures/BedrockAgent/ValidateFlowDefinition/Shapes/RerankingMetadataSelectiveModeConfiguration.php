<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldForReranking>|null $fieldsToExclude
 * @property list<FieldForReranking>|null $fieldsToInclude
 */
class RerankingMetadataSelectiveModeConfiguration extends Shape
{
    /**
     * @param array{
     *     fieldsToExclude?: list<FieldForReranking>|null,
     *     fieldsToInclude?: list<FieldForReranking>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
