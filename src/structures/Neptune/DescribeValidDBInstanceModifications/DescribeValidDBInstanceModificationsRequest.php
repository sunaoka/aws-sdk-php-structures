<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeValidDBInstanceModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 */
class DescribeValidDBInstanceModificationsRequest extends Request
{
    /**
     * @param array{DBInstanceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
