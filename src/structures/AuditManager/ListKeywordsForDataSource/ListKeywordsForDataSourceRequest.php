<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListKeywordsForDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS_Cloudtrail'|'AWS_Config'|'AWS_Security_Hub'|'AWS_API_Call'|'MANUAL' $source
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class ListKeywordsForDataSourceRequest extends Request
{
    /**
     * @param array{
     *     source: 'AWS_Cloudtrail'|'AWS_Config'|'AWS_Security_Hub'|'AWS_API_Call'|'MANUAL',
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
