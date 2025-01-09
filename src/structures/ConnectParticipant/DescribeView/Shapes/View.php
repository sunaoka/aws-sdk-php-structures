<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\DescribeView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property int $Version
 * @property ViewContent $Content
 */
class View extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Version?: int,
     *     Content?: ViewContent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
