<?php

namespace Sunaoka\Aws\Structures\AIOps\GetInvestigationGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $createdBy
 * @property int|null $createdAt
 * @property string|null $lastModifiedBy
 * @property int|null $lastModifiedAt
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $roleArn
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property int<7, 90>|null $retentionInDays
 * @property array<string, list<string>>|null $chatbotNotificationChannel
 * @property list<string>|null $tagKeyBoundaries
 * @property bool|null $isCloudTrailEventHistoryEnabled
 * @property list<Shapes\CrossAccountConfiguration>|null $crossAccountConfigurations
 */
class GetInvestigationGroupResponse extends Response
{
}
