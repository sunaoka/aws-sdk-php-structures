<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceByEvidenceFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $value
 * @property string $complianceCheck
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     value?: string,
     *     complianceCheck?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
