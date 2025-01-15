<?php

namespace Sunaoka\Aws\Structures\Redshift\GetClusterCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DbUser
 * @property string|null $DbName
 * @property string|null $ClusterIdentifier
 * @property int|null $DurationSeconds
 * @property bool|null $AutoCreate
 * @property list<string>|null $DbGroups
 * @property string|null $CustomDomainName
 */
class GetClusterCredentialsRequest extends Request
{
    /**
     * @param array{
     *     DbUser: string,
     *     DbName?: string|null,
     *     ClusterIdentifier?: string|null,
     *     DurationSeconds?: int|null,
     *     AutoCreate?: bool|null,
     *     DbGroups?: list<string>|null,
     *     CustomDomainName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
