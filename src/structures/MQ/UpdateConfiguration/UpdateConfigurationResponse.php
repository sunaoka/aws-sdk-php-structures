<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $Id
 * @property Shapes\ConfigurationRevision $LatestRevision
 * @property string $Name
 * @property list<Shapes\SanitizationWarning> $Warnings
 */
class UpdateConfigurationResponse extends Response
{
}
