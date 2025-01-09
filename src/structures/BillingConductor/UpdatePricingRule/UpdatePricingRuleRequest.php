<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property 'MARKUP'|'DISCOUNT'|'TIERING' $Type
 * @property double $ModifierPercentage
 * @property Shapes\UpdateTieringInput $Tiering
 */
class UpdatePricingRuleRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string,
     *     Description?: string,
     *     Type?: 'MARKUP'|'DISCOUNT'|'TIERING',
     *     ModifierPercentage?: double,
     *     Tiering?: Shapes\UpdateTieringInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
