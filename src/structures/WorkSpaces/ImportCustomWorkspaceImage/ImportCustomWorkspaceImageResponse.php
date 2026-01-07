<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportCustomWorkspaceImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ImageId
 * @property 'PENDING'|'IN_PROGRESS'|'PROCESSING_SOURCE_IMAGE'|'IMAGE_TESTING_START'|'UPDATING_OPERATING_SYSTEM'|'IMAGE_COMPATIBILITY_CHECKING'|'IMAGE_TESTING_GENERALIZATION'|'CREATING_TEST_INSTANCE'|'INSTALLING_COMPONENTS'|'GENERALIZING'|'VALIDATING'|'PUBLISHING'|'COMPLETED'|'ERROR'|null $State
 */
class ImportCustomWorkspaceImageResponse extends Response
{
}
