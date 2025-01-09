<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintArn
 * @property string $schema
 * @property 'DEVELOPMENT'|'LIVE' $blueprintStage
 */
class UpdateBlueprintRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     schema: string,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
