<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetPrivacyBudgetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $privacyBudgetTemplateIdentifier
 */
class GetPrivacyBudgetTemplateRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     privacyBudgetTemplateIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
