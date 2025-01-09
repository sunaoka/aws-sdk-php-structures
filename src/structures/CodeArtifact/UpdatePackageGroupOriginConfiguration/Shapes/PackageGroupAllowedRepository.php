<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroupOriginConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property 'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH' $originRestrictionType
 */
class PackageGroupAllowedRepository extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     originRestrictionType?: 'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
