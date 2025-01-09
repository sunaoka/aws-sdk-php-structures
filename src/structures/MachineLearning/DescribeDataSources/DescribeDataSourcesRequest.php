<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CreatedAt'|'LastUpdatedAt'|'Status'|'Name'|'DataLocationS3'|'IAMUser' $FilterVariable
 * @property string $EQ
 * @property string $GT
 * @property string $LT
 * @property string $GE
 * @property string $LE
 * @property string $NE
 * @property string $Prefix
 * @property 'asc'|'dsc' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class DescribeDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     FilterVariable?: 'CreatedAt'|'LastUpdatedAt'|'Status'|'Name'|'DataLocationS3'|'IAMUser',
     *     EQ?: string,
     *     GT?: string,
     *     LT?: string,
     *     GE?: string,
     *     LE?: string,
     *     NE?: string,
     *     Prefix?: string,
     *     SortOrder?: 'asc'|'dsc',
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
