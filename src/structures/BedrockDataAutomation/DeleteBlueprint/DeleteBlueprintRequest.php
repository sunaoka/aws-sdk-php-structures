<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\DeleteBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintArn
 * @property string|null $blueprintVersion
 */
class DeleteBlueprintRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     blueprintVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
