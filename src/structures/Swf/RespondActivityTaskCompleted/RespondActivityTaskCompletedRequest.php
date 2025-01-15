<?php

namespace Sunaoka\Aws\Structures\Swf\RespondActivityTaskCompleted;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskToken
 * @property string|null $result
 */
class RespondActivityTaskCompletedRequest extends Request
{
    /**
     * @param array{
     *     taskToken: string,
     *     result?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
