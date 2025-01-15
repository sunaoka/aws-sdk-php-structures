<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $Database
 * @property string $Table
 * @property string|null $RedshiftTmpDir
 * @property string|null $TmpDirIAMRole
 * @property UpsertRedshiftTargetOptions|null $UpsertRedshiftOptions
 */
class RedshiftTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Database: string,
     *     Table: string,
     *     RedshiftTmpDir?: string|null,
     *     TmpDirIAMRole?: string|null,
     *     UpsertRedshiftOptions?: UpsertRedshiftTargetOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
