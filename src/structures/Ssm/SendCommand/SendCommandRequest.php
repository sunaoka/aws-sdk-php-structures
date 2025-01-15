<?php

namespace Sunaoka\Aws\Structures\Ssm\SendCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InstanceIds
 * @property list<Shapes\Target>|null $Targets
 * @property string $DocumentName
 * @property string|null $DocumentVersion
 * @property string|null $DocumentHash
 * @property 'Sha256'|'Sha1'|null $DocumentHashType
 * @property int<30, 2592000>|null $TimeoutSeconds
 * @property string|null $Comment
 * @property array<string, list<string>>|null $Parameters
 * @property string|null $OutputS3Region
 * @property string|null $OutputS3BucketName
 * @property string|null $OutputS3KeyPrefix
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property string|null $ServiceRoleArn
 * @property Shapes\NotificationConfig|null $NotificationConfig
 * @property Shapes\CloudWatchOutputConfig|null $CloudWatchOutputConfig
 * @property Shapes\AlarmConfiguration|null $AlarmConfiguration
 */
class SendCommandRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds?: list<string>|null,
     *     Targets?: list<Shapes\Target>|null,
     *     DocumentName: string,
     *     DocumentVersion?: string|null,
     *     DocumentHash?: string|null,
     *     DocumentHashType?: 'Sha256'|'Sha1'|null,
     *     TimeoutSeconds?: int<30, 2592000>|null,
     *     Comment?: string|null,
     *     Parameters?: array<string, list<string>>|null,
     *     OutputS3Region?: string|null,
     *     OutputS3BucketName?: string|null,
     *     OutputS3KeyPrefix?: string|null,
     *     MaxConcurrency?: string|null,
     *     MaxErrors?: string|null,
     *     ServiceRoleArn?: string|null,
     *     NotificationConfig?: Shapes\NotificationConfig|null,
     *     CloudWatchOutputConfig?: Shapes\CloudWatchOutputConfig|null,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
