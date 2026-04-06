<?php

namespace Sunaoka\Aws\Structures\Connect\StopContactMediaProcessing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceId
 * @property string|null $ContactId
 */
class StopContactMediaProcessingRequest extends Request
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     ContactId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
