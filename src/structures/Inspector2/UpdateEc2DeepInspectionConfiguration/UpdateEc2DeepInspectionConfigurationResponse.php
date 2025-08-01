<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateEc2DeepInspectionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $packagePaths
 * @property list<string>|null $orgPackagePaths
 * @property 'ACTIVATED'|'DEACTIVATED'|'PENDING'|'FAILED'|null $status
 * @property string|null $errorMessage
 */
class UpdateEc2DeepInspectionConfigurationResponse extends Response
{
}
