<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property Shapes\PackageSource $PackageSource
 * @property string $PackageDescription
 * @property string $CommitMessage
 */
class UpdatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     PackageSource: Shapes\PackageSource,
     *     PackageDescription?: string,
     *     CommitMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
