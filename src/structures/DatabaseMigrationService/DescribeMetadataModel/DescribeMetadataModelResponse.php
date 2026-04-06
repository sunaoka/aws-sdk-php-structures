<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $MetadataModelName
 * @property string|null $MetadataModelType
 * @property list<Shapes\MetadataModelReference>|null $TargetMetadataModels
 * @property string|null $Definition
 */
class DescribeMetadataModelResponse extends Response
{
}
