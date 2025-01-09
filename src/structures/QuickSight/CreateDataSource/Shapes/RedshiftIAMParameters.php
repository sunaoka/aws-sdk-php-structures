<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $DatabaseUser
 * @property list<string> $DatabaseGroups
 * @property bool $AutoCreateDatabaseUser
 */
class RedshiftIAMParameters extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     DatabaseUser?: string,
     *     DatabaseGroups?: list<string>,
     *     AutoCreateDatabaseUser?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
