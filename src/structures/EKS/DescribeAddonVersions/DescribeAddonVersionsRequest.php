<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $kubernetesVersion
 * @property int $maxResults
 * @property string $nextToken
 * @property string $addonName
 * @property list<string> $types
 * @property list<string> $publishers
 * @property list<string> $owners
 */
class DescribeAddonVersionsRequest extends Request
{
    /**
     * @param array{
     *     kubernetesVersion?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     addonName?: string,
     *     types?: list<string>,
     *     publishers?: list<string>,
     *     owners?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
