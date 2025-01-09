<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListApiDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamePrefix
 * @property string $ConnectionArn
 * @property string $NextToken
 * @property int $Limit
 */
class ListApiDestinationsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     ConnectionArn?: string,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
