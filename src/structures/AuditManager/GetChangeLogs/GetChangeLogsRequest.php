<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetChangeLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string|null $controlSetId
 * @property string|null $controlId
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class GetChangeLogsRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     controlSetId?: string|null,
     *     controlId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
