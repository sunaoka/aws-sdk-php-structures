<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $UserId
 * @property 'SHARED_WITH_ME' $CollectionType
 * @property int $Limit
 * @property string $Marker
 */
class GetResourcesRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     UserId?: string,
     *     CollectionType?: 'SHARED_WITH_ME',
     *     Limit?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
