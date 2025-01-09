<?php

namespace Sunaoka\Aws\Structures\DataZone\PostLineageEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property string $event
 */
class PostLineageEventRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     domainIdentifier: string,
     *     event: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
