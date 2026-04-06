<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\OptimizePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException|null $accessDeniedException
 * @property AnalyzePromptEvent|null $analyzePromptEvent
 * @property BadGatewayException|null $badGatewayException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property InternalServerException|null $internalServerException
 * @property OptimizedPromptEvent|null $optimizedPromptEvent
 * @property ThrottlingException|null $throttlingException
 * @property ValidationException|null $validationException
 */
class OptimizedPromptStream extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException|null,
     *     analyzePromptEvent?: AnalyzePromptEvent|null,
     *     badGatewayException?: BadGatewayException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     internalServerException?: InternalServerException|null,
     *     optimizedPromptEvent?: OptimizedPromptEvent|null,
     *     throttlingException?: ThrottlingException|null,
     *     validationException?: ValidationException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
