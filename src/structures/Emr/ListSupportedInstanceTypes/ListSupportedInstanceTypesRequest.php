<?php

namespace Sunaoka\Aws\Structures\Emr\ListSupportedInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReleaseLabel
 * @property string|null $Marker
 */
class ListSupportedInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     ReleaseLabel: string,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
