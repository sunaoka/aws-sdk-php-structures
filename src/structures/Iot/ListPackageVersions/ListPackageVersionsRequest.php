<?php

namespace Sunaoka\Aws\Structures\Iot\ListPackageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packageName
 * @property 'DRAFT'|'PUBLISHED'|'DEPRECATED'|null $status
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListPackageVersionsRequest extends Request
{
    /**
     * @param array{
     *     packageName: string,
     *     status?: 'DRAFT'|'PUBLISHED'|'DEPRECATED'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
