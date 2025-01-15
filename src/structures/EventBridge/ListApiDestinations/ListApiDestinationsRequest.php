<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListApiDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NamePrefix
 * @property string|null $ConnectionArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListApiDestinationsRequest extends Request
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     ConnectionArn?: string|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
