<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessId
 * @property string|null $clientToken
 */
class DeleteHarnessRequest extends Request
{
    /**
     * @param array{
     *     harnessId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
