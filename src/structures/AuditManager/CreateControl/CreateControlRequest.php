<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $testingInformation
 * @property string|null $actionPlanTitle
 * @property string|null $actionPlanInstructions
 * @property list<Shapes\CreateControlMappingSource> $controlMappingSources
 * @property array<string, string>|null $tags
 */
class CreateControlRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     testingInformation?: string|null,
     *     actionPlanTitle?: string|null,
     *     actionPlanInstructions?: string|null,
     *     controlMappingSources: list<Shapes\CreateControlMappingSource>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
