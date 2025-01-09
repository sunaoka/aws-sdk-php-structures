<?php

namespace Sunaoka\Aws\Structures\Iot\ListSecurityProfilesForTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property bool $recursive
 * @property string $securityProfileTargetArn
 */
class ListSecurityProfilesForTargetRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     recursive?: bool,
     *     securityProfileTargetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
