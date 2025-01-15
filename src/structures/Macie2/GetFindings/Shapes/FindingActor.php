<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainDetails|null $domainDetails
 * @property IpAddressDetails|null $ipAddressDetails
 * @property UserIdentity|null $userIdentity
 */
class FindingActor extends Shape
{
    /**
     * @param array{
     *     domainDetails?: DomainDetails|null,
     *     ipAddressDetails?: IpAddressDetails|null,
     *     userIdentity?: UserIdentity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
