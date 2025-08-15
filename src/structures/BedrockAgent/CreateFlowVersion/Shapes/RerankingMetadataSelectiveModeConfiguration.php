<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldForReranking>|null $fieldsToInclude
 * @property list<FieldForReranking>|null $fieldsToExclude
 */
class RerankingMetadataSelectiveModeConfiguration extends Shape
{
    /**
     * @param array{
     *     fieldsToInclude?: list<FieldForReranking>|null,
     *     fieldsToExclude?: list<FieldForReranking>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
