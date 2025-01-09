<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\UpdateMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $MemberId
 * @property Shapes\MemberLogPublishingConfiguration $LogPublishingConfiguration
 */
class UpdateMemberRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MemberId: string,
     *     LogPublishingConfiguration?: Shapes\MemberLogPublishingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
