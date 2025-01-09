<?php

namespace Sunaoka\Aws\Structures\Iot\ListPackageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property 'DRAFT'|'PUBLISHED'|'DEPRECATED' $status
 * @property int $maxResults
 * @property string $nextToken
 */
class ListPackageVersionsRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     status?: 'DRAFT'|'PUBLISHED'|'DEPRECATED',
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
