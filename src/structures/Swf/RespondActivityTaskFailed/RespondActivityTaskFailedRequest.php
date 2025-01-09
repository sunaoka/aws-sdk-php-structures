<?php

namespace Sunaoka\Aws\Structures\Swf\RespondActivityTaskFailed;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property string $reason
 * @property string $details
 */
class RespondActivityTaskFailedRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     reason?: string,
     *     details?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
