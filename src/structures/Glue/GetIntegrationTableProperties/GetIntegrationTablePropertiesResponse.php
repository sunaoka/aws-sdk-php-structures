<?php

namespace Sunaoka\Aws\Structures\Glue\GetIntegrationTableProperties;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceArn
 * @property string|null $TableName
 * @property Shapes\SourceTableConfig|null $SourceTableConfig
 * @property Shapes\TargetTableConfig|null $TargetTableConfig
 */
class GetIntegrationTablePropertiesResponse extends Response
{
}
