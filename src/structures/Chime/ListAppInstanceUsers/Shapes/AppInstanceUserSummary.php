<?php

namespace Sunaoka\Aws\Structures\Chime\ListAppInstanceUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceUserArn
 * @property string|null $Name
 * @property string|null $Metadata
 */
class AppInstanceUserSummary extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string|null,
     *     Name?: string|null,
     *     Metadata?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
