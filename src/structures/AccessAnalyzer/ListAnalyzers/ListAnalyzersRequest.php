<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAnalyzers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS' $type
 */
class ListAnalyzersRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     type?: 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
