<?php

namespace Sunaoka\Aws\Structures\Glue\ResetJobBookmark;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $RunId
 */
class ResetJobBookmarkRequest extends Request
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
