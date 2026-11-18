<?php

namespace Sunaoka\Aws\Structures\mgn\CreateRemoteSourceAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $remoteSourceActionID
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $ssmParameterName
 * @property int<60, 5400>|null $timeoutSeconds
 * @property string|null $operatingSystem
 * @property array<string, string>|null $tags
 */
class CreateRemoteSourceActionResponse extends Response
{
}
