<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property bool|null $enabled
 */
class SlackBidirectionalConfiguration extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
