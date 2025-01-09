<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubDomain
 * @property list<string> $Nameservers
 */
class VerifiedAccessInstanceCustomSubDomain extends Shape
{
    /**
     * @param array{
     *     SubDomain?: string,
     *     Nameservers?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
