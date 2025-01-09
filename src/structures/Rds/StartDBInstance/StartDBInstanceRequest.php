<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 */
class StartDBInstanceRequest extends Request
{
    /**
     * @param array{DBInstanceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
