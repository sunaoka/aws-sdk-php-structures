<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $packageVersionArn
 * @property string|null $packageName
 * @property string|null $versionName
 * @property string|null $description
 * @property array<string, string>|null $attributes
 * @property 'DRAFT'|'PUBLISHED'|'DEPRECATED'|null $status
 * @property string|null $errorReason
 */
class CreatePackageVersionResponse extends Response
{
}
