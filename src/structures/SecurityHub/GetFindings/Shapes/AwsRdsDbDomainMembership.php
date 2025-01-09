<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $Status
 * @property string $Fqdn
 * @property string $IamRoleName
 */
class AwsRdsDbDomainMembership extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     Status?: string,
     *     Fqdn?: string,
     *     IamRoleName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
