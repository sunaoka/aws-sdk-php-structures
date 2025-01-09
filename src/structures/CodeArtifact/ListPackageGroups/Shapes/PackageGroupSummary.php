<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $pattern
 * @property string $domainName
 * @property string $domainOwner
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $contactInfo
 * @property string $description
 * @property PackageGroupOriginConfiguration $originConfiguration
 * @property PackageGroupReference $parent
 */
class PackageGroupSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     pattern?: string,
     *     domainName?: string,
     *     domainOwner?: string,
     *     createdTime?: \Aws\Api\DateTimeResult,
     *     contactInfo?: string,
     *     description?: string,
     *     originConfiguration?: PackageGroupOriginConfiguration,
     *     parent?: PackageGroupReference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
