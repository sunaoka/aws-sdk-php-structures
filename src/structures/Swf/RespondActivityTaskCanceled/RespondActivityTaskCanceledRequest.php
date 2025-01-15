<?php

namespace Sunaoka\Aws\Structures\Swf\RespondActivityTaskCanceled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property string|null $details
 */
class RespondActivityTaskCanceledRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     details?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
