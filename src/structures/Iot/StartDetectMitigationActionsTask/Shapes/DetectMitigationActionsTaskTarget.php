<?php

namespace Sunaoka\Aws\Structures\Iot\StartDetectMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $violationIds
 * @property string $securityProfileName
 * @property string $behaviorName
 */
class DetectMitigationActionsTaskTarget extends Shape
{
    /**
     * @param array{
     *     violationIds?: list<string>,
     *     securityProfileName?: string,
     *     behaviorName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
