<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobBookmark;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $RunId
 */
class GetJobBookmarkRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     RunId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
