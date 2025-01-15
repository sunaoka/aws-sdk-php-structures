<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetPackageVersionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PackageVersion
 * @property string|null $CommitMessage
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property PluginProperties|null $PluginProperties
 * @property PackageConfiguration|null $PackageConfiguration
 */
class PackageVersionHistory extends Shape
{
    /**
     * @param array{
     *     PackageVersion?: string|null,
     *     CommitMessage?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     PluginProperties?: PluginProperties|null,
     *     PackageConfiguration?: PackageConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
