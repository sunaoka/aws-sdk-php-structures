<?php

namespace Sunaoka\Aws\Structures\Iot\AssociateSbomWithPackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $packageName
 * @property string $versionName
 * @property Shapes\Sbom $sbom
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $sbomValidationStatus
 */
class AssociateSbomWithPackageVersionResponse extends Response
{
}
