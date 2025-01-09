<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DescribePackageVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $packageName
 * @property string $displayName
 * @property string $version
 * @property string $summary
 * @property string $homePage
 * @property string $sourceCodeRepository
 * @property \Aws\Api\DateTimeResult $publishedTime
 * @property list<LicenseInfo> $licenses
 * @property string $revision
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted' $status
 * @property PackageVersionOrigin $origin
 */
class PackageVersionDescription extends Shape
{
    /**
     * @param array{
     *     format?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     packageName?: string,
     *     displayName?: string,
     *     version?: string,
     *     summary?: string,
     *     homePage?: string,
     *     sourceCodeRepository?: string,
     *     publishedTime?: \Aws\Api\DateTimeResult,
     *     licenses?: list<LicenseInfo>,
     *     revision?: string,
     *     status?: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted',
     *     origin?: PackageVersionOrigin
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
