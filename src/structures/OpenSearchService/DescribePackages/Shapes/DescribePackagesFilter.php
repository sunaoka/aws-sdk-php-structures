<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PackageID'|'PackageName'|'PackageStatus'|'PackageType'|'EngineVersion'|'PackageOwner' $Name
 * @property list<string> $Value
 */
class DescribePackagesFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'PackageID'|'PackageName'|'PackageStatus'|'PackageType'|'EngineVersion'|'PackageOwner',
     *     Value?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
