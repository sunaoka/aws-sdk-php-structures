<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetChangeLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $controlSetId
 * @property string $controlId
 * @property string $nextToken
 * @property int $maxResults
 */
class GetChangeLogsRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     controlSetId?: string,
     *     controlId?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
