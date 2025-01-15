<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListApplicationRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property 'registerTime'|'firstUsedTime'|'lastUsedTime'|null $sortBy
 * @property 'ascending'|'descending'|null $sortOrder
 * @property string|null $s3Bucket
 * @property string|null $s3KeyPrefix
 * @property 'include'|'exclude'|'ignore'|null $deployed
 * @property string|null $nextToken
 */
class ListApplicationRevisionsRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     sortBy?: 'registerTime'|'firstUsedTime'|'lastUsedTime'|null,
     *     sortOrder?: 'ascending'|'descending'|null,
     *     s3Bucket?: string|null,
     *     s3KeyPrefix?: string|null,
     *     deployed?: 'include'|'exclude'|'ignore'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
