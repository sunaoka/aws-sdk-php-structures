<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $kubernetesVersion
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $addonName
 * @property list<string>|null $types
 * @property list<string>|null $publishers
 * @property list<string>|null $owners
 */
class DescribeAddonVersionsRequest extends Request
{
    /**
     * @param array{
     *     kubernetesVersion?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     addonName?: string|null,
     *     types?: list<string>|null,
     *     publishers?: list<string>|null,
     *     owners?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
