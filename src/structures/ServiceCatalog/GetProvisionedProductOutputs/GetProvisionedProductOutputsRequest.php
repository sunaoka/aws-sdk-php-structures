<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\GetProvisionedProductOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProvisionedProductId
 * @property string $ProvisionedProductName
 * @property list<string> $OutputKeys
 * @property int<0, 20> $PageSize
 * @property string $PageToken
 */
class GetProvisionedProductOutputsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProvisionedProductId?: string,
     *     ProvisionedProductName?: string,
     *     OutputKeys?: list<string>,
     *     PageSize?: int<0, 20>,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
