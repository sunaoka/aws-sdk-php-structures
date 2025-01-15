<?php

namespace Sunaoka\Aws\Structures\Iot\ListTargetsForSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListTargetsForSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
