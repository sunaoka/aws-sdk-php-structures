<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queryContent
 * @property string $guardContent
 * @property 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION' $expectedAggregatedFindingsResult
 */
class AutomatedReasoningPolicyGeneratedTestCase extends Shape
{
    /**
     * @param array{
     *     queryContent: string,
     *     guardContent: string,
     *     expectedAggregatedFindingsResult: 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
