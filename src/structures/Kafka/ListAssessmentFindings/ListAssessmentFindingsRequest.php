<?php

namespace Sunaoka\Aws\Structures\Kafka\ListAssessmentFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssessmentArn
 * @property string|null $Category
 * @property string $ClusterArn
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Severity
 */
class ListAssessmentFindingsRequest extends Request
{
    /**
     * @param array{
     *     AssessmentArn: string,
     *     Category?: string|null,
     *     ClusterArn: string,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null,
     *     Severity?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
