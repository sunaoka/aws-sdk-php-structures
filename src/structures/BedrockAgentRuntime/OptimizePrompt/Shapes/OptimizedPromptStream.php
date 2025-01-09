<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\OptimizePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException $accessDeniedException
 * @property AnalyzePromptEvent $analyzePromptEvent
 * @property BadGatewayException $badGatewayException
 * @property DependencyFailedException $dependencyFailedException
 * @property InternalServerException $internalServerException
 * @property OptimizedPromptEvent $optimizedPromptEvent
 * @property ThrottlingException $throttlingException
 * @property ValidationException $validationException
 */
class OptimizedPromptStream extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException,
     *     analyzePromptEvent?: AnalyzePromptEvent,
     *     badGatewayException?: BadGatewayException,
     *     dependencyFailedException?: DependencyFailedException,
     *     internalServerException?: InternalServerException,
     *     optimizedPromptEvent?: OptimizedPromptEvent,
     *     throttlingException?: ThrottlingException,
     *     validationException?: ValidationException
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
