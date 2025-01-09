<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateSensitivityInspectionTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property Shapes\SensitivityInspectionTemplateExcludes $excludes
 * @property string $id
 * @property Shapes\SensitivityInspectionTemplateIncludes $includes
 */
class UpdateSensitivityInspectionTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     excludes?: Shapes\SensitivityInspectionTemplateExcludes,
     *     id: string,
     *     includes?: Shapes\SensitivityInspectionTemplateIncludes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
