<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdatePrivacyBudgetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $privacyBudgetTemplateIdentifier
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $privacyBudgetType
 * @property Shapes\PrivacyBudgetTemplateUpdateParameters|null $parameters
 */
class UpdatePrivacyBudgetTemplateRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     privacyBudgetTemplateIdentifier: string,
     *     privacyBudgetType: 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET',
     *     parameters?: Shapes\PrivacyBudgetTemplateUpdateParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
