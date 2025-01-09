<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MedicalScribeJobName
 * @property Shapes\Media $Media
 * @property string $OutputBucketName
 * @property string $OutputEncryptionKMSKeyId
 * @property array<string, string> $KMSEncryptionContext
 * @property string $DataAccessRoleArn
 * @property Shapes\MedicalScribeSettings $Settings
 * @property list<Shapes\MedicalScribeChannelDefinition> $ChannelDefinitions
 * @property list<Shapes\Tag> $Tags
 */
class StartMedicalScribeJobRequest extends Request
{
    /**
     * @param array{
     *     MedicalScribeJobName: string,
     *     Media: Shapes\Media,
     *     OutputBucketName: string,
     *     OutputEncryptionKMSKeyId?: string,
     *     KMSEncryptionContext?: array<string, string>,
     *     DataAccessRoleArn: string,
     *     Settings: Shapes\MedicalScribeSettings,
     *     ChannelDefinitions?: list<Shapes\MedicalScribeChannelDefinition>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
