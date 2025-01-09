<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $Status
 * @property string $FQDN
 * @property string $IAMRoleName
 * @property string $OU
 * @property string $AuthSecretArn
 * @property list<string> $DnsIps
 */
class DomainMembership extends Shape
{
    /**
     * @param array{
     *     Domain?: string,
     *     Status?: string,
     *     FQDN?: string,
     *     IAMRoleName?: string,
     *     OU?: string,
     *     AuthSecretArn?: string,
     *     DnsIps?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
