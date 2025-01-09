<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Channel
 * @property list<Shapes\Destination> $Destinations
 * @property string $Name
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     Channel: string,
     *     Destinations?: list<Shapes\Destination>,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
