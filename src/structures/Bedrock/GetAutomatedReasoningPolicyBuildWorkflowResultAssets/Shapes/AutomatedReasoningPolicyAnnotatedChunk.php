<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $pageNumber
 * @property list<AutomatedReasoningPolicyAnnotatedContent> $content
 */
class AutomatedReasoningPolicyAnnotatedChunk extends Shape
{
    /**
     * @param array{
     *     pageNumber?: int|null,
     *     content: list<AutomatedReasoningPolicyAnnotatedContent>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
