<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintArn
 * @property string $blueprintVersion
 * @property 'DEVELOPMENT'|'LIVE' $blueprintStage
 */
class GetBlueprintRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     blueprintVersion?: string,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
