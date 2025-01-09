<?php

namespace Sunaoka\Aws\Structures\Iam\GetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $Marker
 * @property int $MaxItems
 */
class GetGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
