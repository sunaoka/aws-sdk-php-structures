<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $testingInformation
 * @property string $actionPlanTitle
 * @property string $actionPlanInstructions
 * @property list<Shapes\CreateControlMappingSource> $controlMappingSources
 * @property array<string, string> $tags
 */
class CreateControlRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     testingInformation?: string,
     *     actionPlanTitle?: string,
     *     actionPlanInstructions?: string,
     *     controlMappingSources: list<Shapes\CreateControlMappingSource>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
