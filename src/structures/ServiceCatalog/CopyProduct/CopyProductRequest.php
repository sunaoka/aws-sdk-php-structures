<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CopyProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $SourceProductArn
 * @property string $TargetProductId
 * @property string $TargetProductName
 * @property list<array<'Id', string>> $SourceProvisioningArtifactIdentifiers
 * @property list<'CopyTags'> $CopyOptions
 * @property string $IdempotencyToken
 */
class CopyProductRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     SourceProductArn: string,
     *     TargetProductId?: string,
     *     TargetProductName?: string,
     *     SourceProvisioningArtifactIdentifiers?: list<array<'Id', string>>,
     *     CopyOptions?: list<'CopyTags'>,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
