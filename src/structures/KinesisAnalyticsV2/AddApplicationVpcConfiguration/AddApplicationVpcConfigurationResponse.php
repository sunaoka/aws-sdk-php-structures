<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationVpcConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationARN
 * @property int<1, 999999999>|null $ApplicationVersionId
 * @property Shapes\VpcConfigurationDescription|null $VpcConfigurationDescription
 */
class AddApplicationVpcConfigurationResponse extends Response
{
}
