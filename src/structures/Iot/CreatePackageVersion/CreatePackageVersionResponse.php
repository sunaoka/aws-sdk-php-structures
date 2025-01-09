<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $packageVersionArn
 * @property string $packageName
 * @property string $versionName
 * @property string $description
 * @property array<string, string> $attributes
 * @property 'DRAFT'|'PUBLISHED'|'DEPRECATED' $status
 * @property string $errorReason
 */
class CreatePackageVersionResponse extends Response
{
}
