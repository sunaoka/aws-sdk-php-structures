<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property bool|null $skipResourceInUseCheck
 */
class DeleteFlowRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     skipResourceInUseCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
