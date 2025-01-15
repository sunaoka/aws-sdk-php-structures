<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitivityInspectionTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $description
 * @property Shapes\SensitivityInspectionTemplateExcludes|null $excludes
 * @property Shapes\SensitivityInspectionTemplateIncludes|null $includes
 * @property string|null $name
 * @property string|null $sensitivityInspectionTemplateId
 */
class GetSensitivityInspectionTemplateResponse extends Response
{
}
