<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeEvaluations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CreatedAt'|'LastUpdatedAt'|'Status'|'Name'|'IAMUser'|'MLModelId'|'DataSourceId'|'DataURI' $FilterVariable
 * @property string $EQ
 * @property string $GT
 * @property string $LT
 * @property string $GE
 * @property string $LE
 * @property string $NE
 * @property string $Prefix
 * @property 'asc'|'dsc' $SortOrder
 * @property string $NextToken
 * @property int $Limit
 */
class DescribeEvaluationsRequest extends Request
{
    /**
     * @param array{
     *     FilterVariable?: 'CreatedAt'|'LastUpdatedAt'|'Status'|'Name'|'IAMUser'|'MLModelId'|'DataSourceId'|'DataURI',
     *     EQ?: string,
     *     GT?: string,
     *     LT?: string,
     *     GE?: string,
     *     LE?: string,
     *     NE?: string,
     *     Prefix?: string,
     *     SortOrder?: 'asc'|'dsc',
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
