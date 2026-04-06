<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PackageID'|'PackageName'|'PackageStatus'|'PackageType'|'EngineVersion'|'PackageOwner'|null $Name
 * @property list<string>|null $Value
 */
class DescribePackagesFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'PackageID'|'PackageName'|'PackageStatus'|'PackageType'|'EngineVersion'|'PackageOwner'|null,
     *     Value?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
