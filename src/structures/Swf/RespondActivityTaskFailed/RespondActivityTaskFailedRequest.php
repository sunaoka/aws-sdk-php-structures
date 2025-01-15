<?php

namespace Sunaoka\Aws\Structures\Swf\RespondActivityTaskFailed;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property string|null $reason
 * @property string|null $details
 */
class RespondActivityTaskFailedRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     reason?: string|null,
     *     details?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
