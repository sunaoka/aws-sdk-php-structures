<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\GetProvisionedProductOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $ProvisionedProductId
 * @property string|null $ProvisionedProductName
 * @property list<string>|null $OutputKeys
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class GetProvisionedProductOutputsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProvisionedProductId?: string|null,
     *     ProvisionedProductName?: string|null,
     *     OutputKeys?: list<string>|null,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
