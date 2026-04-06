<?php

namespace Sunaoka\Aws\Structures\Mobile\ExportProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 */
class ExportProjectRequest extends Request
{
    /**
     * @param array{projectId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
