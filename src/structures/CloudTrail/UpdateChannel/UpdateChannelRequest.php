<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Channel
 * @property list<Shapes\Destination>|null $Destinations
 * @property string|null $Name
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     Channel: string,
     *     Destinations?: list<Shapes\Destination>|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
