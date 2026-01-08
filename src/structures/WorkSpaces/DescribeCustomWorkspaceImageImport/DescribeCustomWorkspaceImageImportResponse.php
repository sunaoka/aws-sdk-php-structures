<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeCustomWorkspaceImageImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ImageId
 * @property string|null $InfrastructureConfigurationArn
 * @property 'PENDING'|'IN_PROGRESS'|'PROCESSING_SOURCE_IMAGE'|'IMAGE_TESTING_START'|'UPDATING_OPERATING_SYSTEM'|'IMAGE_COMPATIBILITY_CHECKING'|'IMAGE_TESTING_GENERALIZATION'|'CREATING_TEST_INSTANCE'|'INSTALLING_COMPONENTS'|'GENERALIZING'|'VALIDATING'|'PUBLISHING'|'COMPLETED'|'ERROR'|null $State
 * @property string|null $StateMessage
 * @property int<0, 100>|null $ProgressPercentage
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property Shapes\ImageSourceIdentifier|null $ImageSource
 * @property string|null $ImageBuilderInstanceId
 * @property list<Shapes\CustomWorkspaceImageImportErrorDetails>|null $ErrorDetails
 */
class DescribeCustomWorkspaceImageImportResponse extends Response
{
}
