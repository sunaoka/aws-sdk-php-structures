<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string $flowVersion
 */
class GetFlowVersionRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     flowVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
