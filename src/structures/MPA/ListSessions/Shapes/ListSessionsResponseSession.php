<?php

namespace Sunaoka\Aws\Structures\MPA\ListSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SessionArn
 * @property string|null $ApprovalTeamName
 * @property string|null $ApprovalTeamArn
 * @property \Aws\Api\DateTimeResult|null $InitiationTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string|null $Description
 * @property string|null $ActionName
 * @property string|null $ProtectedResourceArn
 * @property string|null $RequesterServicePrincipal
 * @property string|null $RequesterPrincipalArn
 * @property string|null $RequesterRegion
 * @property string|null $RequesterAccountId
 * @property 'PENDING'|'CANCELLED'|'APPROVED'|'FAILED'|'CREATING'|null $Status
 * @property 'REJECTED'|'EXPIRED'|'CONFIGURATION_CHANGED'|null $StatusCode
 * @property string|null $StatusMessage
 * @property 'AUTO_COMPLETION_UPON_APPROVAL'|null $ActionCompletionStrategy
 * @property list<'APPROVER_VERIFICATION_REQUIRED'>|null $AdditionalSecurityRequirements
 */
class ListSessionsResponseSession extends Shape
{
    /**
     * @param array{
     *     SessionArn?: string|null,
     *     ApprovalTeamName?: string|null,
     *     ApprovalTeamArn?: string|null,
     *     InitiationTime?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     ActionName?: string|null,
     *     ProtectedResourceArn?: string|null,
     *     RequesterServicePrincipal?: string|null,
     *     RequesterPrincipalArn?: string|null,
     *     RequesterRegion?: string|null,
     *     RequesterAccountId?: string|null,
     *     Status?: 'PENDING'|'CANCELLED'|'APPROVED'|'FAILED'|'CREATING'|null,
     *     StatusCode?: 'REJECTED'|'EXPIRED'|'CONFIGURATION_CHANGED'|null,
     *     StatusMessage?: string|null,
     *     ActionCompletionStrategy?: 'AUTO_COMPLETION_UPON_APPROVAL'|null,
     *     AdditionalSecurityRequirements?: list<'APPROVER_VERIFICATION_REQUIRED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
