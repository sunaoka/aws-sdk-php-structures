<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property Shapes\CountTokensInput $input
 */
class CountTokensRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     input: Shapes\CountTokensInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
