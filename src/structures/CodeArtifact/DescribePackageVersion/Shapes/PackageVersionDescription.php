<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null $format
 * @property string|null $namespace
 * @property string|null $packageName
 * @property string|null $displayName
 * @property string|null $version
 * @property string|null $summary
 * @property string|null $homePage
 * @property string|null $sourceCodeRepository
 * @property \Aws\Api\DateTimeResult|null $publishedTime
 * @property list<LicenseInfo>|null $licenses
 * @property string|null $revision
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'|null $status
 * @property PackageVersionOrigin|null $origin
 */
class PackageVersionDescription extends Shape
{
    /**
     * @param array{
     *     format?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null,
     *     namespace?: string|null,
     *     packageName?: string|null,
     *     displayName?: string|null,
     *     version?: string|null,
     *     summary?: string|null,
     *     homePage?: string|null,
     *     sourceCodeRepository?: string|null,
     *     publishedTime?: \Aws\Api\DateTimeResult|null,
     *     licenses?: list<LicenseInfo>|null,
     *     revision?: string|null,
     *     status?: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'|null,
     *     origin?: PackageVersionOrigin|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
