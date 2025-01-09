<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateEc2DeepInspectionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $errorMessage
 * @property list<string> $orgPackagePaths
 * @property list<string> $packagePaths
 * @property 'ACTIVATED'|'DEACTIVATED'|'PENDING'|'FAILED' $status
 */
class UpdateEc2DeepInspectionConfigurationResponse extends Response
{
}
