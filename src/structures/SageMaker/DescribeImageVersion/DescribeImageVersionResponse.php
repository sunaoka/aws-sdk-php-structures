<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeImageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BaseImage
 * @property string|null $ContainerImage
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FailureReason
 * @property string|null $ImageArn
 * @property string|null $ImageVersionArn
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|null $ImageVersionStatus
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property int<0, max>|null $Version
 * @property 'NOT_PROVIDED'|'STABLE'|'TO_BE_ARCHIVED'|'ARCHIVED'|null $VendorGuidance
 * @property 'TRAINING'|'INFERENCE'|'NOTEBOOK_KERNEL'|null $JobType
 * @property string|null $MLFramework
 * @property string|null $ProgrammingLang
 * @property 'CPU'|'GPU'|null $Processor
 * @property bool|null $Horovod
 * @property string|null $ReleaseNotes
 */
class DescribeImageVersionResponse extends Response
{
}
