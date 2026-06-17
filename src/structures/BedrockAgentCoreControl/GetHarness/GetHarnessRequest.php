<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $harnessId
 * @property string|null $harnessVersion
 */
class GetHarnessRequest extends Request
{
    /**
     * @param array{
     *     harnessId: string,
     *     harnessVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
