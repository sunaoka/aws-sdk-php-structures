<?php

namespace Sunaoka\Aws\Structures\Schemas\ListDiscoverers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DiscovererArn
 * @property string|null $DiscovererId
 * @property string|null $SourceArn
 * @property 'STARTED'|'STOPPED'|null $State
 * @property bool|null $CrossAccount
 * @property array<string, string>|null $Tags
 */
class DiscovererSummary extends Shape
{
    /**
     * @param array{
     *     DiscovererArn?: string|null,
     *     DiscovererId?: string|null,
     *     SourceArn?: string|null,
     *     State?: 'STARTED'|'STOPPED'|null,
     *     CrossAccount?: bool|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
