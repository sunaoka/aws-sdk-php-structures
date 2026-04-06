<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\ListSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $ConnectedDatabase
 * @property string $Database
 * @property string|null $DbUser
 * @property int<0, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $SchemaPattern
 * @property string|null $SecretArn
 * @property string|null $WorkgroupName
 */
class ListSchemasRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     ConnectedDatabase?: string|null,
     *     Database: string,
     *     DbUser?: string|null,
     *     MaxResults?: int<0, 1000>|null,
     *     NextToken?: string|null,
     *     SchemaPattern?: string|null,
     *     SecretArn?: string|null,
     *     WorkgroupName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
