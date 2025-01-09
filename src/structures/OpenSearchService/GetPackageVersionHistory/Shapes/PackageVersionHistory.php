<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetPackageVersionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageVersion
 * @property string $CommitMessage
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property PluginProperties $PluginProperties
 * @property PackageConfiguration $PackageConfiguration
 */
class PackageVersionHistory extends Shape
{
    /**
     * @param array{
     *     PackageVersion?: string,
     *     CommitMessage?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     PluginProperties?: PluginProperties,
     *     PackageConfiguration?: PackageConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
