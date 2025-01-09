<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBInstanceAutomatedBackupsReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBInstanceAutomatedBackupsArn
 */
class DBInstanceAutomatedBackupsReplication extends Shape
{
    /**
     * @param array{DBInstanceAutomatedBackupsArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
