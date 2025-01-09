<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetWorkgroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workgroupName
 */
class GetWorkgroupRequest extends Request
{
    /**
     * @param array{workgroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
