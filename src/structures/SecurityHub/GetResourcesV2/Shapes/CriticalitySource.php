<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AutomationRule'|'ResourceName'|'TagInference' $Source
 * @property string $Reason
 */
class CriticalitySource extends Shape
{
    /**
     * @param array{
     *     Source: 'AutomationRule'|'ResourceName'|'TagInference',
     *     Reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
