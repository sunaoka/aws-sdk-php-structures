<?php

namespace Sunaoka\Aws\Structures\Iot\ListSecurityProfilesForTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property bool|null $recursive
 * @property string $securityProfileTargetArn
 */
class ListSecurityProfilesForTargetRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     recursive?: bool|null,
     *     securityProfileTargetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
