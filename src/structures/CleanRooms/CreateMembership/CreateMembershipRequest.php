<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property 'ENABLED'|'DISABLED'|null $jobLogStatus
 * @property array<string, string>|null $tags
 * @property Shapes\MembershipProtectedQueryResultConfiguration|null $defaultResultConfiguration
 * @property Shapes\MembershipProtectedJobResultConfiguration|null $defaultJobResultConfiguration
 * @property Shapes\MembershipPaymentConfiguration|null $paymentConfiguration
 * @property bool|null $isMetricsEnabled
 */
class CreateMembershipRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     jobLogStatus?: 'ENABLED'|'DISABLED'|null,
     *     tags?: array<string, string>|null,
     *     defaultResultConfiguration?: Shapes\MembershipProtectedQueryResultConfiguration|null,
     *     defaultJobResultConfiguration?: Shapes\MembershipProtectedJobResultConfiguration|null,
     *     paymentConfiguration?: Shapes\MembershipPaymentConfiguration|null,
     *     isMetricsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
