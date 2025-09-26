<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\OptimizePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OptimizedPromptEvent|null $optimizedPromptEvent
 * @property AnalyzePromptEvent|null $analyzePromptEvent
 * @property InternalServerException|null $internalServerException
 * @property ThrottlingException|null $throttlingException
 * @property ValidationException|null $validationException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property AccessDeniedException|null $accessDeniedException
 * @property BadGatewayException|null $badGatewayException
 */
class OptimizedPromptStream extends Shape
{
    /**
     * @param array{
     *     optimizedPromptEvent?: OptimizedPromptEvent|null,
     *     analyzePromptEvent?: AnalyzePromptEvent|null,
     *     internalServerException?: InternalServerException|null,
     *     throttlingException?: ThrottlingException|null,
     *     validationException?: ValidationException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     accessDeniedException?: AccessDeniedException|null,
     *     badGatewayException?: BadGatewayException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
