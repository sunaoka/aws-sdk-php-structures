<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string|null $UserId
 * @property 'SHARED_WITH_ME'|null $CollectionType
 * @property int<1, 999>|null $Limit
 * @property string|null $Marker
 */
class GetResourcesRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     UserId?: string|null,
     *     CollectionType?: 'SHARED_WITH_ME'|null,
     *     Limit?: int<1, 999>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
