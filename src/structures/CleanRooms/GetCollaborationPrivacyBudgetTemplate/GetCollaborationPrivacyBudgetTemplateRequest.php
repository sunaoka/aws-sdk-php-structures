<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationPrivacyBudgetTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $privacyBudgetTemplateIdentifier
 */
class GetCollaborationPrivacyBudgetTemplateRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     privacyBudgetTemplateIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
