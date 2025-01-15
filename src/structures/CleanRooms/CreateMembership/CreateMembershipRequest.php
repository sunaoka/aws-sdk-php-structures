<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property array<string, string>|null $tags
 * @property Shapes\MembershipProtectedQueryResultConfiguration|null $defaultResultConfiguration
 * @property Shapes\MembershipPaymentConfiguration|null $paymentConfiguration
 */
class CreateMembershipRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     tags?: array<string, string>|null,
     *     defaultResultConfiguration?: Shapes\MembershipProtectedQueryResultConfiguration|null,
     *     paymentConfiguration?: Shapes\MembershipPaymentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
