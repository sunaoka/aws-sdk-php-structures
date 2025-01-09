<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainDetails $domainDetails
 * @property IpAddressDetails $ipAddressDetails
 * @property UserIdentity $userIdentity
 */
class FindingActor extends Shape
{
    /**
     * @param array{
     *     domainDetails?: DomainDetails,
     *     ipAddressDetails?: IpAddressDetails,
     *     userIdentity?: UserIdentity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
