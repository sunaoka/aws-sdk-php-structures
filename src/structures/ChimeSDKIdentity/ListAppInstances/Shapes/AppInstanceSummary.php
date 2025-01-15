<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceArn
 * @property string|null $Name
 * @property string|null $Metadata
 */
class AppInstanceSummary extends Shape
{
    /**
     * @param array{
     *     AppInstanceArn?: string|null,
     *     Name?: string|null,
     *     Metadata?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
