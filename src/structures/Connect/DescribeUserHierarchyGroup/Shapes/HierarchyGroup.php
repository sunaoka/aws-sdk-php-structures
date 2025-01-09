<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUserHierarchyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $LevelId
 * @property HierarchyPath $HierarchyPath
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 */
class HierarchyGroup extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     LevelId?: string,
     *     HierarchyPath?: HierarchyPath,
     *     Tags?: array<string, string>,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
