<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteFlowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string $flowVersion
 * @property bool $skipResourceInUseCheck
 */
class DeleteFlowVersionRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     flowVersion: string,
     *     skipResourceInUseCheck?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
