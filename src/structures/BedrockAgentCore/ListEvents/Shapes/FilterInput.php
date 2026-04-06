<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BranchFilter|null $branch
 * @property list<EventMetadataFilterExpression>|null $eventMetadata
 */
class FilterInput extends Shape
{
    /**
     * @param array{
     *     branch?: BranchFilter|null,
     *     eventMetadata?: list<EventMetadataFilterExpression>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
