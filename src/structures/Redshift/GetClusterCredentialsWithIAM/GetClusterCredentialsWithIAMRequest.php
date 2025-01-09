<?php

namespace Sunaoka\Aws\Structures\Redshift\GetClusterCredentialsWithIAM;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DbName
 * @property string $ClusterIdentifier
 * @property int $DurationSeconds
 * @property string $CustomDomainName
 */
class GetClusterCredentialsWithIAMRequest extends Request
{
    /**
     * @param array{
     *     DbName?: string,
     *     ClusterIdentifier?: string,
     *     DurationSeconds?: int,
     *     CustomDomainName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
