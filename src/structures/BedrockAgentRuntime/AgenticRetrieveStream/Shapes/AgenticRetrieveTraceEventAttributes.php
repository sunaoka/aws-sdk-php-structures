<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AgenticRetrieveAction>|null $actions
 * @property AgenticRetrieveAppliedInstruction|null $appliedInstruction
 * @property list<AgenticRetrieveFailure>|null $failures
 * @property string $message
 * @property list<AgenticRetrieveSourceMetadata>|null $retrievalMetadata
 * @property list<AgenticRetrieveTraceResultItem>|null $retrievalResponse
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property 'Planning'|'Retrieval'|'SpeculativeRetrieval'|'FullDocumentExpansion'|'SessionHistoryLoad'|'CodeExecution' $step
 * @property list<AgenticRetrieveWarning>|null $warnings
 */
class AgenticRetrieveTraceEventAttributes extends Shape
{
    /**
     * @param array{
     *     actions?: list<AgenticRetrieveAction>|null,
     *     appliedInstruction?: AgenticRetrieveAppliedInstruction|null,
     *     failures?: list<AgenticRetrieveFailure>|null,
     *     message: string,
     *     retrievalMetadata?: list<AgenticRetrieveSourceMetadata>|null,
     *     retrievalResponse?: list<AgenticRetrieveTraceResultItem>|null,
     *     status: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     step: 'Planning'|'Retrieval'|'SpeculativeRetrieval'|'FullDocumentExpansion'|'SessionHistoryLoad'|'CodeExecution',
     *     warnings?: list<AgenticRetrieveWarning>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
