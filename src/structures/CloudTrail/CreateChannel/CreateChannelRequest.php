<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Source
 * @property list<Shapes\Destination> $Destinations
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Source: string,
     *     Destinations: list<Shapes\Destination>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
