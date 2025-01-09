<?php

namespace Sunaoka\Aws\Structures\Schemas\ListDiscoverers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DiscovererArn
 * @property string $DiscovererId
 * @property string $SourceArn
 * @property 'STARTED'|'STOPPED' $State
 * @property bool $CrossAccount
 * @property array<string, string> $Tags
 */
class DiscovererSummary extends Shape
{
    /**
     * @param array{
     *     DiscovererArn?: string,
     *     DiscovererId?: string,
     *     SourceArn?: string,
     *     State?: 'STARTED'|'STOPPED',
     *     CrossAccount?: bool,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
