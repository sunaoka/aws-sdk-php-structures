<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PathPrefix
 * @property string $Marker
 * @property int $MaxItems
 */
class ListInstanceProfilesRequest extends Request
{
    /**
     * @param array{
     *     PathPrefix?: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
