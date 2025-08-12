<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartMedicalScribeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MedicalScribeJobName
 * @property Shapes\Media $Media
 * @property string $OutputBucketName
 * @property string|null $OutputEncryptionKMSKeyId
 * @property array<string, string>|null $KMSEncryptionContext
 * @property string $DataAccessRoleArn
 * @property Shapes\MedicalScribeSettings $Settings
 * @property list<Shapes\MedicalScribeChannelDefinition>|null $ChannelDefinitions
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\MedicalScribeContext|null $MedicalScribeContext
 */
class StartMedicalScribeJobRequest extends Request
{
    /**
     * @param array{
     *     MedicalScribeJobName: string,
     *     Media: Shapes\Media,
     *     OutputBucketName: string,
     *     OutputEncryptionKMSKeyId?: string|null,
     *     KMSEncryptionContext?: array<string, string>|null,
     *     DataAccessRoleArn: string,
     *     Settings: Shapes\MedicalScribeSettings,
     *     ChannelDefinitions?: list<Shapes\MedicalScribeChannelDefinition>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     MedicalScribeContext?: Shapes\MedicalScribeContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
