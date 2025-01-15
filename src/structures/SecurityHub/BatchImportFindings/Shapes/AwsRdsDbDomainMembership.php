<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property string|null $Status
 * @property string|null $Fqdn
 * @property string|null $IamRoleName
 */
class AwsRdsDbDomainMembership extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     Status?: string|null,
     *     Fqdn?: string|null,
     *     IamRoleName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
