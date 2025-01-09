<?php

namespace Sunaoka\Aws\Structures\Iot\GetPackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $packageVersionArn
 * @property string $packageName
 * @property string $versionName
 * @property string $description
 * @property array<string, string> $attributes
 * @property Shapes\PackageVersionArtifact $artifact
 * @property 'DRAFT'|'PUBLISHED'|'DEPRECATED' $status
 * @property string $errorReason
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property Shapes\Sbom $sbom
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $sbomValidationStatus
 * @property string $recipe
 */
class GetPackageVersionResponse extends Response
{
}
