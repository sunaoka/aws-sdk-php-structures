<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 * @property string $identifier
 */
class GetLineageNodeRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     eventTimestamp?: \Aws\Api\DateTimeResult|null,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
