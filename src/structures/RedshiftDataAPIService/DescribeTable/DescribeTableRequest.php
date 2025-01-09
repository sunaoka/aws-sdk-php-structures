<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $ConnectedDatabase
 * @property string $Database
 * @property string $DbUser
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $Schema
 * @property string $SecretArn
 * @property string $Table
 * @property string $WorkgroupName
 */
class DescribeTableRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     ConnectedDatabase?: string,
     *     Database: string,
     *     DbUser?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Schema?: string,
     *     SecretArn?: string,
     *     Table?: string,
     *     WorkgroupName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
