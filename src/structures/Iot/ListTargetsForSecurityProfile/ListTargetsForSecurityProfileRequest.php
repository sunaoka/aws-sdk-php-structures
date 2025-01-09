<?php

namespace Sunaoka\Aws\Structures\Iot\ListTargetsForSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTargetsForSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
