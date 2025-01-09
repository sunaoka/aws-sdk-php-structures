<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreatePricingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Name
 * @property string $Description
 * @property 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU' $Scope
 * @property 'MARKUP'|'DISCOUNT'|'TIERING' $Type
 * @property double $ModifierPercentage
 * @property string $Service
 * @property array<string, string> $Tags
 * @property string $BillingEntity
 * @property Shapes\CreateTieringInput $Tiering
 * @property string $UsageType
 * @property string $Operation
 */
class CreatePricingRuleRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Name: string,
     *     Description?: string,
     *     Scope: 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU',
     *     Type: 'MARKUP'|'DISCOUNT'|'TIERING',
     *     ModifierPercentage?: double,
     *     Service?: string,
     *     Tags?: array<string, string>,
     *     BillingEntity?: string,
     *     Tiering?: Shapes\CreateTieringInput,
     *     UsageType?: string,
     *     Operation?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
