<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListAssociatedPackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $packageGroup
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property bool $preview
 */
class ListAssociatedPackagesRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     packageGroup: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     preview?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
