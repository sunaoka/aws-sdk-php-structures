<?php

namespace Sunaoka\Aws\Structures\AIOps\CreateInvestigationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $roleArn
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property int<7, 90>|null $retentionInDays
 * @property array<string, string>|null $tags
 * @property list<string>|null $tagKeyBoundaries
 * @property array<string, list<string>>|null $chatbotNotificationChannel
 * @property bool|null $isCloudTrailEventHistoryEnabled
 * @property list<Shapes\CrossAccountConfiguration>|null $crossAccountConfigurations
 */
class CreateInvestigationGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     roleArn: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     retentionInDays?: int<7, 90>|null,
     *     tags?: array<string, string>|null,
     *     tagKeyBoundaries?: list<string>|null,
     *     chatbotNotificationChannel?: array<string, list<string>>|null,
     *     isCloudTrailEventHistoryEnabled?: bool|null,
     *     crossAccountConfigurations?: list<Shapes\CrossAccountConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
