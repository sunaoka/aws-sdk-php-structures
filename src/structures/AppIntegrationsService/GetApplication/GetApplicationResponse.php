<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property string $Namespace
 * @property string $Description
 * @property Shapes\ApplicationSourceConfig $ApplicationSourceConfig
 * @property list<Shapes\Subscription> $Subscriptions
 * @property list<Shapes\Publication> $Publications
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property array<string, string> $Tags
 * @property list<string> $Permissions
 */
class GetApplicationResponse extends Response
{
}
