<?php

namespace Sunaoka\Aws\Structures\Swf\RespondActivityTaskCanceled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property string $details
 */
class RespondActivityTaskCanceledRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     details?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
