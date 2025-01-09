<?php

namespace Sunaoka\Aws\Structures\Ssm\SendCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property list<Shapes\Target> $Targets
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property string $DocumentHash
 * @property 'Sha256'|'Sha1' $DocumentHashType
 * @property int<30, 2592000> $TimeoutSeconds
 * @property string $Comment
 * @property array<string, list<string>> $Parameters
 * @property string $OutputS3Region
 * @property string $OutputS3BucketName
 * @property string $OutputS3KeyPrefix
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property string $ServiceRoleArn
 * @property Shapes\NotificationConfig $NotificationConfig
 * @property Shapes\CloudWatchOutputConfig $CloudWatchOutputConfig
 * @property Shapes\AlarmConfiguration $AlarmConfiguration
 */
class SendCommandRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>,
     *     Targets?: list<Shapes\Target>,
     *     DocumentName: string,
     *     DocumentVersion?: string,
     *     DocumentHash?: string,
     *     DocumentHashType?: 'Sha256'|'Sha1',
     *     TimeoutSeconds?: int<30, 2592000>,
     *     Comment?: string,
     *     Parameters?: array<string, list<string>>,
     *     OutputS3Region?: string,
     *     OutputS3BucketName?: string,
     *     OutputS3KeyPrefix?: string,
     *     MaxConcurrency?: string,
     *     MaxErrors?: string,
     *     ServiceRoleArn?: string,
     *     NotificationConfig?: Shapes\NotificationConfig,
     *     CloudWatchOutputConfig?: Shapes\CloudWatchOutputConfig,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
