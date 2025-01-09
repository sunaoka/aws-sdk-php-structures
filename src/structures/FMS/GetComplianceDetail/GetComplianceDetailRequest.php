<?php

namespace Sunaoka\Aws\Structures\FMS\GetComplianceDetail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $MemberAccount
 */
class GetComplianceDetailRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     MemberAccount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
