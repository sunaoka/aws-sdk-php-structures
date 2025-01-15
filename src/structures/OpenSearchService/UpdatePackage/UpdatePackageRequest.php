<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PackageID
 * @property Shapes\PackageSource $PackageSource
 * @property string|null $PackageDescription
 * @property string|null $CommitMessage
 * @property Shapes\PackageConfiguration|null $PackageConfiguration
 * @property Shapes\PackageEncryptionOptions|null $PackageEncryptionOptions
 */
class UpdatePackageRequest extends Request
{
    /**
     * @param array{
     *     PackageID: string,
     *     PackageSource: Shapes\PackageSource,
     *     PackageDescription?: string|null,
     *     CommitMessage?: string|null,
     *     PackageConfiguration?: Shapes\PackageConfiguration|null,
     *     PackageEncryptionOptions?: Shapes\PackageEncryptionOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
