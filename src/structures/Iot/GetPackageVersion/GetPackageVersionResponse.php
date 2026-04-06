<?php

namespace Sunaoka\Aws\Structures\Iot\GetPackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $packageVersionArn
 * @property string|null $packageName
 * @property string|null $versionName
 * @property string|null $description
 * @property array<string, string>|null $attributes
 * @property Shapes\PackageVersionArtifact|null $artifact
 * @property 'DRAFT'|'PUBLISHED'|'DEPRECATED'|null $status
 * @property string|null $errorReason
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property Shapes\Sbom|null $sbom
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $sbomValidationStatus
 * @property string|null $recipe
 */
class GetPackageVersionResponse extends Response
{
}
