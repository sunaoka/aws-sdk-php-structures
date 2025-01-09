<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteWorkgroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workgroupName
 */
class DeleteWorkgroupRequest extends Request
{
    /**
     * @param array{workgroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
