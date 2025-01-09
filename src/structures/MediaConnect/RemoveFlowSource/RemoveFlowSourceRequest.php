<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveFlowSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property string $SourceArn
 */
class RemoveFlowSourceRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     SourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
