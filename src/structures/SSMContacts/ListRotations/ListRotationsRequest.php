<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationNamePrefix
 * @property string $NextToken
 * @property int<0, 1024> $MaxResults
 */
class ListRotationsRequest extends Request
{
    /**
     * @param array{
     *     RotationNamePrefix?: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 1024>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
