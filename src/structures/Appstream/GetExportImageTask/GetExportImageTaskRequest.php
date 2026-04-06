<?php

namespace Sunaoka\Aws\Structures\Appstream\GetExportImageTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TaskId
 */
class GetExportImageTaskRequest extends Request
{
    /**
     * @param array{TaskId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
