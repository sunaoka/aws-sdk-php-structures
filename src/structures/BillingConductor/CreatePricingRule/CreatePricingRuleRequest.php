<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreatePricingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $Name
 * @property string|null $Description
 * @property 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU' $Scope
 * @property 'MARKUP'|'DISCOUNT'|'TIERING' $Type
 * @property double|null $ModifierPercentage
 * @property string|null $Service
 * @property array<string, string>|null $Tags
 * @property string|null $BillingEntity
 * @property Shapes\CreateTieringInput|null $Tiering
 * @property string|null $UsageType
 * @property string|null $Operation
 */
class CreatePricingRuleRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Name: string,
     *     Description?: string|null,
     *     Scope: 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU',
     *     Type: 'MARKUP'|'DISCOUNT'|'TIERING',
     *     ModifierPercentage?: double|null,
     *     Service?: string|null,
     *     Tags?: array<string, string>|null,
     *     BillingEntity?: string|null,
     *     Tiering?: Shapes\CreateTieringInput|null,
     *     UsageType?: string|null,
     *     Operation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
