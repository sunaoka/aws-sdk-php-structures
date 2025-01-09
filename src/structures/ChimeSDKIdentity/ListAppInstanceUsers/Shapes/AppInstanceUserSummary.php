<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceUserArn
 * @property string $Name
 * @property string $Metadata
 */
class AppInstanceUserSummary extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string,
     *     Name?: string,
     *     Metadata?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
