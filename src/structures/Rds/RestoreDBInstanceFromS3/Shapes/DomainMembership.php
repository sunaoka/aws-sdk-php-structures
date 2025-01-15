<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceFromS3\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Domain
 * @property string|null $Status
 * @property string|null $FQDN
 * @property string|null $IAMRoleName
 * @property string|null $OU
 * @property string|null $AuthSecretArn
 * @property list<string>|null $DnsIps
 */
class DomainMembership extends Shape
{
    /**
     * @param array{
     *     Domain?: string|null,
     *     Status?: string|null,
     *     FQDN?: string|null,
     *     IAMRoleName?: string|null,
     *     OU?: string|null,
     *     AuthSecretArn?: string|null,
     *     DnsIps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
