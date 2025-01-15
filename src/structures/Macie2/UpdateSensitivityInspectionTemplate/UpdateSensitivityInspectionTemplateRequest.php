<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateSensitivityInspectionTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property Shapes\SensitivityInspectionTemplateExcludes|null $excludes
 * @property string $id
 * @property Shapes\SensitivityInspectionTemplateIncludes|null $includes
 */
class UpdateSensitivityInspectionTemplateRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     excludes?: Shapes\SensitivityInspectionTemplateExcludes|null,
     *     id: string,
     *     includes?: Shapes\SensitivityInspectionTemplateIncludes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
