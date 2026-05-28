<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceName
 * @property string|null $serviceArn
 * @property list<string>|null $userJourneys
 */
class SystemServiceAssociatedMetadata extends Shape
{
    /**
     * @param array{
     *     serviceName?: string|null,
     *     serviceArn?: string|null,
     *     userJourneys?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
