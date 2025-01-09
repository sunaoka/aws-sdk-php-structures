<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListApiDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property string $ConnectionArn
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class ListApiDestinationsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     ConnectionArn?: string,
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
