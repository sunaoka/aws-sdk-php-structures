<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactFlowId
 * @property string $Content
 */
class UpdateContactFlowContentRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowId: string,
     *     Content: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
