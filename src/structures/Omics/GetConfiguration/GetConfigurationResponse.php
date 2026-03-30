<?php

namespace Sunaoka\Aws\Structures\Omics\GetConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $uuid
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\RunConfigurationsResponse|null $runConfigurations
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property array<string, string>|null $tags
 */
class GetConfigurationResponse extends Response
{
}
