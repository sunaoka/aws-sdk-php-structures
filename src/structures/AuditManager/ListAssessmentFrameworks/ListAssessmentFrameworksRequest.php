<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'Custom' $frameworkType
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssessmentFrameworksRequest extends Request
{
    /**
     * @param array{
     *     frameworkType: 'Standard'|'Custom',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
