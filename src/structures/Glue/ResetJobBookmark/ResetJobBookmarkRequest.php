<?php

namespace Sunaoka\Aws\Structures\Glue\ResetJobBookmark;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string|null $RunId
 */
class ResetJobBookmarkRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     RunId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
