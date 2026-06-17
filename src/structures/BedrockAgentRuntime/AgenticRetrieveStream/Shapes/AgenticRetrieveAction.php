<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveFullDocExpansionDetails|null $fullDocumentExpansion
 * @property AgenticRetrieveActionDetails|null $retrieve
 */
class AgenticRetrieveAction extends Shape
{
    /**
     * @param array{
     *     fullDocumentExpansion?: AgenticRetrieveFullDocExpansionDetails|null,
     *     retrieve?: AgenticRetrieveActionDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
