<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAnalyzers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS'|null $type
 */
class ListAnalyzersRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     type?: 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
