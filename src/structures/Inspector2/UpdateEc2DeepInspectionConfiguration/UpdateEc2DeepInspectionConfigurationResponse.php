<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateEc2DeepInspectionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $errorMessage
 * @property list<string>|null $orgPackagePaths
 * @property list<string>|null $packagePaths
 * @property 'ACTIVATED'|'DEACTIVATED'|'PENDING'|'FAILED'|null $status
 */
class UpdateEc2DeepInspectionConfigurationResponse extends Response
{
}
