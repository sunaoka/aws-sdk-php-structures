<?php

namespace Sunaoka\Aws\Structures\Amplify\GetDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubDomainSetting $subDomainSetting
 * @property bool $verified
 * @property string $dnsRecord
 */
class SubDomain extends Shape
{
    /**
     * @param array{
     *     subDomainSetting: SubDomainSetting,
     *     verified: bool,
     *     dnsRecord: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
