<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceArn
 * @property string $Name
 * @property string $Metadata
 */
class AppInstanceSummary extends Shape
{
    /**
     * @param array{
     *     AppInstanceArn?: string,
     *     Name?: string,
     *     Metadata?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
