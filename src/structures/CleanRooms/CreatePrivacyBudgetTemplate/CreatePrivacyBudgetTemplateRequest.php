<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreatePrivacyBudgetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property 'CALENDAR_MONTH'|'NONE' $autoRefresh
 * @property 'DIFFERENTIAL_PRIVACY' $privacyBudgetType
 * @property Shapes\PrivacyBudgetTemplateParametersInput $parameters
 * @property array<string, string> $tags
 */
class CreatePrivacyBudgetTemplateRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     autoRefresh: 'CALENDAR_MONTH'|'NONE',
     *     privacyBudgetType: 'DIFFERENTIAL_PRIVACY',
     *     parameters: Shapes\PrivacyBudgetTemplateParametersInput,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
