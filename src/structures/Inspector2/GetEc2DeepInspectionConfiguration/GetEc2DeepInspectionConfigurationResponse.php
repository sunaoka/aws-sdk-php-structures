<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetEc2DeepInspectionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $packagePaths
 * @property list<string>|null $orgPackagePaths
 * @property 'ACTIVATED'|'DEACTIVATED'|'PENDING'|'FAILED'|null $status
 * @property string|null $errorMessage
 */
class GetEc2DeepInspectionConfigurationResponse extends Response
{
}
