<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubDomain
 * @property list<string>|null $Nameservers
 */
class VerifiedAccessInstanceCustomSubDomain extends Shape
{
    /**
     * @param array{
     *     SubDomain?: string|null,
     *     Nameservers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
