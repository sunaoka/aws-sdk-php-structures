<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintArn
 * @property string|null $blueprintVersion
 * @property 'DEVELOPMENT'|'LIVE'|null $blueprintStage
 */
class GetBlueprintRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     blueprintVersion?: string|null,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
