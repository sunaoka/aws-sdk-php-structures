<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListKeywordsForDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS_Cloudtrail'|'AWS_Config'|'AWS_Security_Hub'|'AWS_API_Call'|'MANUAL' $source
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListKeywordsForDataSourceRequest extends Request
{
    /**
     * @param array{
     *     source: 'AWS_Cloudtrail'|'AWS_Config'|'AWS_Security_Hub'|'AWS_API_Call'|'MANUAL',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
