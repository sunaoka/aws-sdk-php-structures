<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeMLModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CreatedAt'|'LastUpdatedAt'|'Status'|'Name'|'IAMUser'|'TrainingDataSourceId'|'RealtimeEndpointStatus'|'MLModelType'|'Algorithm'|'TrainingDataURI'|null $FilterVariable
 * @property string|null $EQ
 * @property string|null $GT
 * @property string|null $LT
 * @property string|null $GE
 * @property string|null $LE
 * @property string|null $NE
 * @property string|null $Prefix
 * @property 'asc'|'dsc'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class DescribeMLModelsRequest extends Request
{
    /**
     * @param array{
     *     FilterVariable?: 'CreatedAt'|'LastUpdatedAt'|'Status'|'Name'|'IAMUser'|'TrainingDataSourceId'|'RealtimeEndpointStatus'|'MLModelType'|'Algorithm'|'TrainingDataURI'|null,
     *     EQ?: string|null,
     *     GT?: string|null,
     *     LT?: string|null,
     *     GE?: string|null,
     *     LE?: string|null,
     *     NE?: string|null,
     *     Prefix?: string|null,
     *     SortOrder?: 'asc'|'dsc'|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
