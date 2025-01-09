<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $UserId
 * @property 'SHARED_WITH_ME' $CollectionType
 * @property int<1, 999> $Limit
 * @property string $Marker
 */
class GetResourcesRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     UserId?: string,
     *     CollectionType?: 'SHARED_WITH_ME',
     *     Limit?: int<1, 999>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
