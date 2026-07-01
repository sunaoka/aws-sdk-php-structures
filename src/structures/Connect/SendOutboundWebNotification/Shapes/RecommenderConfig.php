<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundWebNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $RecommenderName
 * @property array<string, string>|null $Context
 */
class RecommenderConfig extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     RecommenderName: string,
     *     Context?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
