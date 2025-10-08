<?php

namespace Sunaoka\Aws\Structures\AIOps\UpdateInvestigationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $roleArn
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property list<string>|null $tagKeyBoundaries
 * @property array<string, list<string>>|null $chatbotNotificationChannel
 * @property bool|null $isCloudTrailEventHistoryEnabled
 * @property list<Shapes\CrossAccountConfiguration>|null $crossAccountConfigurations
 */
class UpdateInvestigationGroupRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     roleArn?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
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
