<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\PutInvitationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationName
 * @property string|null $ContactEmail
 * @property list<string>|null $PrivateSkillIds
 */
class PutInvitationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     OrganizationName: string,
     *     ContactEmail?: string|null,
     *     PrivateSkillIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
