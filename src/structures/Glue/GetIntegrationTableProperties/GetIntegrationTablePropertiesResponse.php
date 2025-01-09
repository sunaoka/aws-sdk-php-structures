<?php

namespace Sunaoka\Aws\Structures\Glue\GetIntegrationTableProperties;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceArn
 * @property string $TableName
 * @property Shapes\SourceTableConfig $SourceTableConfig
 * @property Shapes\TargetTableConfig $TargetTableConfig
 */
class GetIntegrationTablePropertiesResponse extends Response
{
}
