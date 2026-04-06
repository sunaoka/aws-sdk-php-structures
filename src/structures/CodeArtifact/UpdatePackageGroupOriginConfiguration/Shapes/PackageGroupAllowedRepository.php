<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroupOriginConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property 'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH'|null $originRestrictionType
 */
class PackageGroupAllowedRepository extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     originRestrictionType?: 'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
