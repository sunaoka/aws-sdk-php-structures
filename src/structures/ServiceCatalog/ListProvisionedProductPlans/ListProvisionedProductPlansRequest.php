<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisionedProductPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProvisionProductId
 * @property int<0, 20> $PageSize
 * @property string $PageToken
 * @property Shapes\AccessLevelFilter $AccessLevelFilter
 */
class ListProvisionedProductPlansRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProvisionProductId?: string,
     *     PageSize?: int<0, 20>,
     *     PageToken?: string,
     *     AccessLevelFilter?: Shapes\AccessLevelFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
