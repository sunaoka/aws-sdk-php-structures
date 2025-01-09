<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RotationNamePrefix
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListRotationsRequest extends Request
{
    /**
     * @param array{
     *     RotationNamePrefix?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
