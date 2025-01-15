<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CopyProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $SourceProductArn
 * @property string|null $TargetProductId
 * @property string|null $TargetProductName
 * @property list<array<'Id', string>>|null $SourceProvisioningArtifactIdentifiers
 * @property list<'CopyTags'>|null $CopyOptions
 * @property string $IdempotencyToken
 */
class CopyProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     SourceProductArn: string,
     *     TargetProductId?: string|null,
     *     TargetProductName?: string|null,
     *     SourceProvisioningArtifactIdentifiers?: list<array<'Id', string>>|null,
     *     CopyOptions?: list<'CopyTags'>|null,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
