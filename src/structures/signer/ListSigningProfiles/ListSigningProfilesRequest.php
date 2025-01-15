<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $includeCanceled
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $platformId
 * @property list<'Active'|'Canceled'|'Revoked'>|null $statuses
 */
class ListSigningProfilesRequest extends Request
{
    /**
     * @param array{
     *     includeCanceled?: bool|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     platformId?: string|null,
     *     statuses?: list<'Active'|'Canceled'|'Revoked'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
