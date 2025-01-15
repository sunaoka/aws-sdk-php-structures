<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisioningArtifactsForServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceActionId
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 * @property string|null $AcceptLanguage
 */
class ListProvisioningArtifactsForServiceActionRequest extends Request
{
    /**
     * @param array{
     *     ServiceActionId: string,
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
