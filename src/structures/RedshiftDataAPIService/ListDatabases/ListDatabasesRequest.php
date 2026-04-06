<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string $Database
 * @property string|null $SecretArn
 * @property string|null $DbUser
 * @property string|null $NextToken
 * @property int<0, 1000>|null $MaxResults
 * @property string|null $WorkgroupName
 */
class ListDatabasesRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     Database: string,
     *     SecretArn?: string|null,
     *     DbUser?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1000>|null,
     *     WorkgroupName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
