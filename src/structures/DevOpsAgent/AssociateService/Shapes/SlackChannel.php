<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $channelName
 * @property string $channelId
 */
class SlackChannel extends Shape
{
    /**
     * @param array{
     *     channelName?: string|null,
     *     channelId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
