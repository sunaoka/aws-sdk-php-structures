<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisioningArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProductId
 */
class ListProvisioningArtifactsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProductId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
