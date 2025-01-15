<?php

namespace Sunaoka\Aws\Structures\Iot\StartDetectMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $violationIds
 * @property string|null $securityProfileName
 * @property string|null $behaviorName
 */
class DetectMitigationActionsTaskTarget extends Shape
{
    /**
     * @param array{
     *     violationIds?: list<string>|null,
     *     securityProfileName?: string|null,
     *     behaviorName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
