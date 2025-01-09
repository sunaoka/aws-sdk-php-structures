<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'Custom' $frameworkType
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class ListAssessmentFrameworksRequest extends Request
{
    /**
     * @param array{
     *     frameworkType: 'Standard'|'Custom',
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
