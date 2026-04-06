<?php

namespace Sunaoka\Aws\Structures\DataZone\PostLineageEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|resource|\Psr\Http\Message\StreamInterface $event
 * @property string|null $clientToken
 */
class PostLineageEventRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     event: string|resource|\Psr\Http\Message\StreamInterface,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
