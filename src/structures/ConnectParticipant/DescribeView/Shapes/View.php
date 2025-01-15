<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\DescribeView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property int|null $Version
 * @property ViewContent|null $Content
 */
class View extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Version?: int|null,
     *     Content?: ViewContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
