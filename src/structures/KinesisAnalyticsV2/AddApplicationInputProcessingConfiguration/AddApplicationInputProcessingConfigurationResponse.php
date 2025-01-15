<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInputProcessingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationARN
 * @property int<1, 999999999>|null $ApplicationVersionId
 * @property string|null $InputId
 * @property Shapes\InputProcessingConfigurationDescription|null $InputProcessingConfigurationDescription
 */
class AddApplicationInputProcessingConfigurationResponse extends Response
{
}
