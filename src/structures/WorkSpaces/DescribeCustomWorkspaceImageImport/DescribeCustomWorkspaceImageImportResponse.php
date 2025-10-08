<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeCustomWorkspaceImageImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ImageId
 * @property string|null $InfrastructureConfigurationArn
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'ERROR'|null $State
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property Shapes\ImageSourceIdentifier|null $ImageSource
 * @property string|null $ImageBuilderInstanceId
 * @property list<Shapes\CustomWorkspaceImageImportErrorDetails>|null $ErrorDetails
 */
class DescribeCustomWorkspaceImageImportResponse extends Response
{
}
