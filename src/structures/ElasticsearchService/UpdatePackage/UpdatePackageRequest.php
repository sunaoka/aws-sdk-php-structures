<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property Shapes\PackageSource $PackageSource
 * @property string|null $PackageDescription
 * @property string|null $CommitMessage
 */
class UpdatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     PackageSource: Shapes\PackageSource,
     *     PackageDescription?: string|null,
     *     CommitMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
