<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreatePrivacyBudgetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property 'CALENDAR_MONTH'|'NONE'|null $autoRefresh
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $privacyBudgetType
 * @property Shapes\PrivacyBudgetTemplateParametersInput $parameters
 * @property array<string, string>|null $tags
 */
class CreatePrivacyBudgetTemplateRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     autoRefresh?: 'CALENDAR_MONTH'|'NONE'|null,
     *     privacyBudgetType: 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET',
     *     parameters: Shapes\PrivacyBudgetTemplateParametersInput,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
