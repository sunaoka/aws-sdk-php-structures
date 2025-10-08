<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeCustomWorkspaceImageImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 */
class DescribeCustomWorkspaceImageImportRequest extends Request
{
    /**
     * @param array{ImageId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
