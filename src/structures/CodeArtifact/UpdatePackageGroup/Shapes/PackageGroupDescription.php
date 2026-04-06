<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $pattern
 * @property string|null $domainName
 * @property string|null $domainOwner
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property string|null $contactInfo
 * @property string|null $description
 * @property PackageGroupOriginConfiguration|null $originConfiguration
 * @property PackageGroupReference|null $parent
 */
class PackageGroupDescription extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     pattern?: string|null,
     *     domainName?: string|null,
     *     domainOwner?: string|null,
     *     createdTime?: \Aws\Api\DateTimeResult|null,
     *     contactInfo?: string|null,
     *     description?: string|null,
     *     originConfiguration?: PackageGroupOriginConfiguration|null,
     *     parent?: PackageGroupReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
