<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListServiceActionsForProvisioningArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property int<0, 20> $PageSize
 * @property string $PageToken
 * @property string $AcceptLanguage
 */
class ListServiceActionsForProvisioningArtifactRequest extends Request
{
    /**
     * @param array{
     *     ProductId: string,
     *     ProvisioningArtifactId: string,
     *     PageSize?: int<0, 20>,
     *     PageToken?: string,
     *     AcceptLanguage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
