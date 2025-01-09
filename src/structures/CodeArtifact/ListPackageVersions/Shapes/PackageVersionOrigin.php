<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainEntryPoint $domainEntryPoint
 * @property 'INTERNAL'|'EXTERNAL'|'UNKNOWN' $originType
 */
class PackageVersionOrigin extends Shape
{
    /**
     * @param array{
     *     domainEntryPoint?: DomainEntryPoint,
     *     originType?: 'INTERNAL'|'EXTERNAL'|'UNKNOWN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
