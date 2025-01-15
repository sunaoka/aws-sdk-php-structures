<?php

namespace Sunaoka\Aws\Structures\Redshift\GetClusterCredentialsWithIAM;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DbName
 * @property string|null $ClusterIdentifier
 * @property int|null $DurationSeconds
 * @property string|null $CustomDomainName
 */
class GetClusterCredentialsWithIAMRequest extends Request
{
    /**
     * @param array{
     *     DbName?: string|null,
     *     ClusterIdentifier?: string|null,
     *     DurationSeconds?: int|null,
     *     CustomDomainName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
