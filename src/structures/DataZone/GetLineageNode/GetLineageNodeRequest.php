<?php

namespace Sunaoka\Aws\Structures\DataZone\GetLineageNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 */
class GetLineageNodeRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     eventTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
