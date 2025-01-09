<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationVpcConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationARN
 * @property int<1, 999999999> $ApplicationVersionId
 * @property Shapes\VpcConfigurationDescription $VpcConfigurationDescription
 * @property string $OperationId
 */
class AddApplicationVpcConfigurationResponse extends Response
{
}
