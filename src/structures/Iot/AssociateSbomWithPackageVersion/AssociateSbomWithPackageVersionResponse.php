<?php

namespace Sunaoka\Aws\Structures\Iot\AssociateSbomWithPackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $packageName
 * @property string|null $versionName
 * @property Shapes\Sbom|null $sbom
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $sbomValidationStatus
 */
class AssociateSbomWithPackageVersionResponse extends Response
{
}
