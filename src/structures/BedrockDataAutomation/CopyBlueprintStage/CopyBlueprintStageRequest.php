<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CopyBlueprintStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintArn
 * @property 'DEVELOPMENT'|'LIVE' $sourceStage
 * @property 'DEVELOPMENT'|'LIVE' $targetStage
 * @property string|null $clientToken
 */
class CopyBlueprintStageRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     sourceStage: 'DEVELOPMENT'|'LIVE',
     *     targetStage: 'DEVELOPMENT'|'LIVE',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
