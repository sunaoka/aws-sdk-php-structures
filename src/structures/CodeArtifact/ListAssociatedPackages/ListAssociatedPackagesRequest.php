<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListAssociatedPackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $packageGroup
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property bool|null $preview
 */
class ListAssociatedPackagesRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     packageGroup: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     preview?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
