<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property string|null $Id
 * @property Shapes\ConfigurationRevision|null $LatestRevision
 * @property string|null $Name
 * @property list<Shapes\SanitizationWarning>|null $Warnings
 */
class UpdateConfigurationResponse extends Response
{
}
