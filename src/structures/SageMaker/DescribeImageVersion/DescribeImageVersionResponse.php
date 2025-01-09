<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeImageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BaseImage
 * @property string $ContainerImage
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FailureReason
 * @property string $ImageArn
 * @property string $ImageVersionArn
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED' $ImageVersionStatus
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property int $Version
 * @property 'NOT_PROVIDED'|'STABLE'|'TO_BE_ARCHIVED'|'ARCHIVED' $VendorGuidance
 * @property 'TRAINING'|'INFERENCE'|'NOTEBOOK_KERNEL' $JobType
 * @property string $MLFramework
 * @property string $ProgrammingLang
 * @property 'CPU'|'GPU' $Processor
 * @property bool $Horovod
 * @property string $ReleaseNotes
 */
class DescribeImageVersionResponse extends Response
{
}
