<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RotationNamePrefix
 * @property string|null $NextToken
 * @property int<0, 1024>|null $MaxResults
 */
class ListRotationsRequest extends Request
{
    /**
     * @param array{
     *     RotationNamePrefix?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1024>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
