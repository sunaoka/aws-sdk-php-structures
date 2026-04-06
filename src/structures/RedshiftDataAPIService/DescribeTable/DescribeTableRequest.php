<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $SecretArn
 * @property string|null $DbUser
 * @property string $Database
 * @property string|null $ConnectedDatabase
 * @property string|null $Schema
 * @property string|null $Table
 * @property string|null $NextToken
 * @property int<0, 1000>|null $MaxResults
 * @property string|null $WorkgroupName
 */
class DescribeTableRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     SecretArn?: string|null,
     *     DbUser?: string|null,
     *     Database: string,
     *     ConnectedDatabase?: string|null,
     *     Schema?: string|null,
     *     Table?: string|null,
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
