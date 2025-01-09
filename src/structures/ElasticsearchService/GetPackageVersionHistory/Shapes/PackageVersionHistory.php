<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetPackageVersionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PackageVersion
 * @property string $CommitMessage
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class PackageVersionHistory extends Shape
{
    /**
     * @param array{
     *     PackageVersion?: string,
     *     CommitMessage?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
