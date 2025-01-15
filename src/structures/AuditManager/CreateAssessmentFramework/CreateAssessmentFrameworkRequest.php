<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $complianceType
 * @property list<Shapes\CreateAssessmentFrameworkControlSet> $controlSets
 * @property array<string, string>|null $tags
 */
class CreateAssessmentFrameworkRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     complianceType?: string|null,
     *     controlSets: list<Shapes\CreateAssessmentFrameworkControlSet>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
