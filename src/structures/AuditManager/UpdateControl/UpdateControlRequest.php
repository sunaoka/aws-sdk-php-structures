<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlId
 * @property string $name
 * @property string $description
 * @property string $testingInformation
 * @property string $actionPlanTitle
 * @property string $actionPlanInstructions
 * @property list<Shapes\ControlMappingSource> $controlMappingSources
 */
class UpdateControlRequest extends Request
{
    /**
     * @param array{
     *     controlId: string,
     *     name: string,
     *     description?: string,
     *     testingInformation?: string,
     *     actionPlanTitle?: string,
     *     actionPlanInstructions?: string,
     *     controlMappingSources: list<Shapes\ControlMappingSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
