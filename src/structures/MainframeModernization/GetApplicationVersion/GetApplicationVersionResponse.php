<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetApplicationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<1, max> $applicationVersion
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $definitionContent
 * @property string $description
 * @property string $name
 * @property 'Creating'|'Available'|'Failed' $status
 * @property string $statusReason
 */
class GetApplicationVersionResponse extends Response
{
}
