<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInputProcessingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationARN
 * @property int<1, 999999999> $ApplicationVersionId
 * @property string $InputId
 * @property Shapes\InputProcessingConfigurationDescription $InputProcessingConfigurationDescription
 */
class AddApplicationInputProcessingConfigurationResponse extends Response
{
}
