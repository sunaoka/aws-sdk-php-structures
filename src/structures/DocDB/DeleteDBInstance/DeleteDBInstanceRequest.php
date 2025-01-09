<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 */
class DeleteDBInstanceRequest extends Request
{
    /**
     * @param array{DBInstanceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
