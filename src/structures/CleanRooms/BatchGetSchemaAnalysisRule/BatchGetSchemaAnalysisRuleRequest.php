<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property list<Shapes\SchemaAnalysisRuleRequest> $schemaAnalysisRuleRequests
 */
class BatchGetSchemaAnalysisRuleRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     schemaAnalysisRuleRequests: list<Shapes\SchemaAnalysisRuleRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
