<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListObjectives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property AssociatedDomainSummary $Domain
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 */
class ObjectiveSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     Description: string,
     *     Domain: AssociatedDomainSummary,
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     LastUpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
