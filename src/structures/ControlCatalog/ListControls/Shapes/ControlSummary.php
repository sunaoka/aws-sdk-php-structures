<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string>|null $Aliases
 * @property string $Name
 * @property string $Description
 * @property 'PREVENTIVE'|'PROACTIVE'|'DETECTIVE'|null $Behavior
 * @property 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $Severity
 * @property 'REQUIRED'|'OPTIONAL'|'NONE'|null $ParameterRequirementSummary
 * @property ImplementationSummary|null $Implementation
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property list<string>|null $GovernedResources
 * @property list<string>|null $GovernedProviders
 */
class ControlSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Aliases?: list<string>|null,
     *     Name: string,
     *     Description: string,
     *     Behavior?: 'PREVENTIVE'|'PROACTIVE'|'DETECTIVE'|null,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     ParameterRequirementSummary?: 'REQUIRED'|'OPTIONAL'|'NONE'|null,
     *     Implementation?: ImplementationSummary|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     GovernedResources?: list<string>|null,
     *     GovernedProviders?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
