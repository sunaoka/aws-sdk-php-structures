<?php

namespace Sunaoka\Aws\Structures\Redshift\GetClusterCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DbUser
 * @property string $DbName
 * @property string $ClusterIdentifier
 * @property int $DurationSeconds
 * @property bool $AutoCreate
 * @property list<string> $DbGroups
 * @property string $CustomDomainName
 */
class GetClusterCredentialsRequest extends Request
{
    /**
     * @param array{
     *     DbUser: string,
     *     DbName?: string,
     *     ClusterIdentifier?: string,
     *     DurationSeconds?: int,
     *     AutoCreate?: bool,
     *     DbGroups?: list<string>,
     *     CustomDomainName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
