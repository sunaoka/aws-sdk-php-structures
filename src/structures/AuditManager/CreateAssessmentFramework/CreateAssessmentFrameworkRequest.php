<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentFramework;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $complianceType
 * @property list<Shapes\CreateAssessmentFrameworkControlSet> $controlSets
 * @property array<string, string> $tags
 */
class CreateAssessmentFrameworkRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     complianceType?: string,
     *     controlSets: list<Shapes\CreateAssessmentFrameworkControlSet>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
