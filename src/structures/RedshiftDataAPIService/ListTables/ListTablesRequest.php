<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $ConnectedDatabase
 * @property string $Database
 * @property string $DbUser
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $SchemaPattern
 * @property string $SecretArn
 * @property string $TablePattern
 * @property string $WorkgroupName
 */
class ListTablesRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     ConnectedDatabase?: string,
     *     Database: string,
     *     DbUser?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     SchemaPattern?: string,
     *     SecretArn?: string,
     *     TablePattern?: string,
     *     WorkgroupName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
