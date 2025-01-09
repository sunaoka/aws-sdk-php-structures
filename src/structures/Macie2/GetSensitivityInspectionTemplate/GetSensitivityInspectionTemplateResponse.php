<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitivityInspectionTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $description
 * @property Shapes\SensitivityInspectionTemplateExcludes $excludes
 * @property Shapes\SensitivityInspectionTemplateIncludes $includes
 * @property string $name
 * @property string $sensitivityInspectionTemplateId
 */
class GetSensitivityInspectionTemplateResponse extends Response
{
}
