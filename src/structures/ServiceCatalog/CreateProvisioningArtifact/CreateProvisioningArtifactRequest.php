<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProductId
 * @property Shapes\ProvisioningArtifactProperties $Parameters
 * @property string $IdempotencyToken
 */
class CreateProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProductId: string,
     *     Parameters: Shapes\ProvisioningArtifactProperties,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
