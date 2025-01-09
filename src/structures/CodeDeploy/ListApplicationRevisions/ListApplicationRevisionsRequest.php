<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListApplicationRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property 'registerTime'|'firstUsedTime'|'lastUsedTime' $sortBy
 * @property 'ascending'|'descending' $sortOrder
 * @property string $s3Bucket
 * @property string $s3KeyPrefix
 * @property 'include'|'exclude'|'ignore' $deployed
 * @property string $nextToken
 */
class ListApplicationRevisionsRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     sortBy?: 'registerTime'|'firstUsedTime'|'lastUsedTime',
     *     sortOrder?: 'ascending'|'descending',
     *     s3Bucket?: string,
     *     s3KeyPrefix?: string,
     *     deployed?: 'include'|'exclude'|'ignore',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
