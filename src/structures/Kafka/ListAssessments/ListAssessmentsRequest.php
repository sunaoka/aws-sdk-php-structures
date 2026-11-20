<?php

namespace Sunaoka\Aws\Structures\Kafka\ListAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AssessmentType
 * @property string $ClusterArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     AssessmentType?: string|null,
     *     ClusterArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
