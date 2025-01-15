<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListServiceActionsForProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 * @property string|null $AcceptLanguage
 */
class ListServiceActionsForProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     ProductId: string,
     *     ProvisioningArtifactId: string,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null,
     *     AcceptLanguage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
