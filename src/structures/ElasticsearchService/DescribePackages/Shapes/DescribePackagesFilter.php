<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PackageID'|'PackageName'|'PackageStatus'|null $Name
 * @property list<string>|null $Value
 */
class DescribePackagesFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'PackageID'|'PackageName'|'PackageStatus'|null,
     *     Value?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
