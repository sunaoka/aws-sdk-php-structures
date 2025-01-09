<?php

namespace Sunaoka\Aws\Structures\DAX\DeleteSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetGroupName
 */
class DeleteSubnetGroupRequest extends Request
{
    /**
     * @param array{SubnetGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
