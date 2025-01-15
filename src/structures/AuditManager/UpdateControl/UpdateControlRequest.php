<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlId
 * @property string $name
 * @property string|null $description
 * @property string|null $testingInformation
 * @property string|null $actionPlanTitle
 * @property string|null $actionPlanInstructions
 * @property list<Shapes\ControlMappingSource> $controlMappingSources
 */
class UpdateControlRequest extends Request
{
    /**
     * @param array{
     *     controlId: string,
     *     name: string,
     *     description?: string|null,
     *     testingInformation?: string|null,
     *     actionPlanTitle?: string|null,
     *     actionPlanInstructions?: string|null,
     *     controlMappingSources: list<Shapes\ControlMappingSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
