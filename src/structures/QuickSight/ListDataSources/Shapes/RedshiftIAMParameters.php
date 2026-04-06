<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string|null $DatabaseUser
 * @property list<string>|null $DatabaseGroups
 * @property bool|null $AutoCreateDatabaseUser
 */
class RedshiftIAMParameters extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     DatabaseUser?: string|null,
     *     DatabaseGroups?: list<string>|null,
     *     AutoCreateDatabaseUser?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
