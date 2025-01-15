<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainEntryPoint|null $domainEntryPoint
 * @property 'INTERNAL'|'EXTERNAL'|'UNKNOWN'|null $originType
 */
class PackageVersionOrigin extends Shape
{
    /**
     * @param array{
     *     domainEntryPoint?: DomainEntryPoint|null,
     *     originType?: 'INTERNAL'|'EXTERNAL'|'UNKNOWN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
