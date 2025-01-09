<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSubnetGroupName
 */
class DeleteDBSubnetGroupRequest extends Request
{
    /**
     * @param array{DBSubnetGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
