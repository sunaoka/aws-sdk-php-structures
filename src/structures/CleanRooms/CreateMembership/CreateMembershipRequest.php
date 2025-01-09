<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property array<string, string> $tags
 * @property Shapes\MembershipProtectedQueryResultConfiguration $defaultResultConfiguration
 * @property Shapes\MembershipPaymentConfiguration $paymentConfiguration
 */
class CreateMembershipRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     tags?: array<string, string>,
     *     defaultResultConfiguration?: Shapes\MembershipProtectedQueryResultConfiguration,
     *     paymentConfiguration?: Shapes\MembershipPaymentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
