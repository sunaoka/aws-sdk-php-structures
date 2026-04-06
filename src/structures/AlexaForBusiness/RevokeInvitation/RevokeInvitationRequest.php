<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\RevokeInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserArn
 * @property string|null $EnrollmentId
 */
class RevokeInvitationRequest extends Request
{
    /**
     * @param array{
     *     UserArn?: string|null,
     *     EnrollmentId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
