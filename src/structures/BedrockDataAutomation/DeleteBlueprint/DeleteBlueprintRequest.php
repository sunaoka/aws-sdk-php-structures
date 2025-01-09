<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\DeleteBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintArn
 * @property string $blueprintVersion
 */
class DeleteBlueprintRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     blueprintVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
