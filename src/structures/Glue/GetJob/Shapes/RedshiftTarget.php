<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $Database
 * @property string $Table
 * @property string $RedshiftTmpDir
 * @property string $TmpDirIAMRole
 * @property UpsertRedshiftTargetOptions $UpsertRedshiftOptions
 */
class RedshiftTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Database: string,
     *     Table: string,
     *     RedshiftTmpDir?: string,
     *     TmpDirIAMRole?: string,
     *     UpsertRedshiftOptions?: UpsertRedshiftTargetOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
