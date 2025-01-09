<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $MemberAccount
 * @property string $ResourceId
 * @property string $ResourceType
 */
class GetViolationDetailsRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     MemberAccount: string,
     *     ResourceId: string,
     *     ResourceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
