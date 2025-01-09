<?php

namespace Sunaoka\Aws\Structures\SsmSap\UpdateApplicationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWSBackup' $BackintMode
 * @property bool $EnsureNoBackupInProcess
 */
class BackintConfig extends Shape
{
    /**
     * @param array{
     *     BackintMode: 'AWSBackup',
     *     EnsureNoBackupInProcess: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
