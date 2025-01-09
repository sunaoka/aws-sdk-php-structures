<?php

namespace Sunaoka\Aws\Structures\Emr\ListSupportedInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReleaseLabel
 * @property string $Marker
 */
class ListSupportedInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     ReleaseLabel: string,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
