<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisionedProductPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string|null $ProvisionProductId
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 * @property Shapes\AccessLevelFilter|null $AccessLevelFilter
 */
class ListProvisionedProductPlansRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProvisionProductId?: string|null,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null,
     *     AccessLevelFilter?: Shapes\AccessLevelFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
