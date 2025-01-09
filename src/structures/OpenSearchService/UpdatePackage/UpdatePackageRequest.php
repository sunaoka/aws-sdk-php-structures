<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property Shapes\PackageSource $PackageSource
 * @property string $PackageDescription
 * @property string $CommitMessage
 * @property Shapes\PackageConfiguration $PackageConfiguration
 * @property Shapes\PackageEncryptionOptions $PackageEncryptionOptions
 */
class UpdatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     PackageSource: Shapes\PackageSource,
     *     PackageDescription?: string,
     *     CommitMessage?: string,
     *     PackageConfiguration?: Shapes\PackageConfiguration,
     *     PackageEncryptionOptions?: Shapes\PackageEncryptionOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
