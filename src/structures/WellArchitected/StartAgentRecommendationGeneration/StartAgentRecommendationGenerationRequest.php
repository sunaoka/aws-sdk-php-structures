<?php

namespace Sunaoka\Aws\Structures\WellArchitected\StartAgentRecommendationGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileArn
 * @property list<'RESOURCE'|'ARCHITECTURE'|'APPLICATION'> $types
 * @property string|null $name
 * @property Shapes\SensitiveDocument|null $additionalContext
 * @property Shapes\Scope|null $scope
 */
class StartAgentRecommendationGenerationRequest extends Request
{
    /**
     * @param array{
     *     profileArn: string,
     *     types: list<'RESOURCE'|'ARCHITECTURE'|'APPLICATION'>,
     *     name?: string|null,
     *     additionalContext?: Shapes\SensitiveDocument|null,
     *     scope?: Shapes\Scope|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
