<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'MARKUP'|'DISCOUNT'|'TIERING'|null $Type
 * @property double|null $ModifierPercentage
 * @property Shapes\UpdateTieringInput|null $Tiering
 */
class UpdatePricingRuleRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Type?: 'MARKUP'|'DISCOUNT'|'TIERING'|null,
     *     ModifierPercentage?: double|null,
     *     Tiering?: Shapes\UpdateTieringInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
