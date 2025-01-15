<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 */
class DeleteProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProductId: string,
     *     ProvisioningArtifactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
