<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociateServiceActionFromProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property string $ServiceActionId
 * @property string $AcceptLanguage
 * @property string $IdempotencyToken
 */
class DisassociateServiceActionFromProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     ProductId: string,
     *     ProvisioningArtifactId: string,
     *     ServiceActionId: string,
     *     AcceptLanguage?: string,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
