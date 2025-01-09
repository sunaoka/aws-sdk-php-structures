<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $Database
 * @property string $DbUser
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $SecretArn
 * @property string $WorkgroupName
 */
class ListDatabasesRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     Database: string,
     *     DbUser?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     SecretArn?: string,
     *     WorkgroupName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
