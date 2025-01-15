<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'Custom' $frameworkType
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListAssessmentFrameworksRequest extends Request
{
    /**
     * @param array{
     *     frameworkType: 'Standard'|'Custom',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
