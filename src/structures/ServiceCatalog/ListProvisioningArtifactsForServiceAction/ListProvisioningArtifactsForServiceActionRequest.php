<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisioningArtifactsForServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceActionId
 * @property int<0, 20> $PageSize
 * @property string $PageToken
 * @property string $AcceptLanguage
 */
class ListProvisioningArtifactsForServiceActionRequest extends Request
{
    /**
     * @param array{
     *     ServiceActionId: string,
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
