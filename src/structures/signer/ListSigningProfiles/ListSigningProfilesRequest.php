<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $includeCanceled
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 * @property string $platformId
 * @property list<'Active'|'Canceled'|'Revoked'> $statuses
 */
class ListSigningProfilesRequest extends Request
{
    /**
     * @param array{
     *     includeCanceled?: bool,
     *     maxResults?: int<1, 25>,
     *     nextToken?: string,
     *     platformId?: string,
     *     statuses?: list<'Active'|'Canceled'|'Revoked'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
