<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateLag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $numberOfConnections
 * @property string $location
 * @property string $connectionsBandwidth
 * @property string $lagName
 * @property string $connectionId
 * @property list<Shapes\Tag> $tags
 * @property list<Shapes\Tag> $childConnectionTags
 * @property string $providerName
 * @property bool $requestMACSec
 */
class CreateLagRequest extends Request
{
    /**
     * @param array{
     *     numberOfConnections: int,
     *     location: string,
     *     connectionsBandwidth: string,
     *     lagName: string,
     *     connectionId?: string,
     *     tags?: list<Shapes\Tag>,
     *     childConnectionTags?: list<Shapes\Tag>,
     *     providerName?: string,
     *     requestMACSec?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
