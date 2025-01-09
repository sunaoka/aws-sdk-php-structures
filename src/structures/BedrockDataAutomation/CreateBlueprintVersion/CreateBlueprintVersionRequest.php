<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateBlueprintVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintArn
 * @property string $clientToken
 */
class CreateBlueprintVersionRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
