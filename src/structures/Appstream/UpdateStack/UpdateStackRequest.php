<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DisplayName
 * @property string $Description
 * @property string $Name
 * @property list<Shapes\StorageConnector> $StorageConnectors
 * @property bool $DeleteStorageConnectors
 * @property string $RedirectURL
 * @property string $FeedbackURL
 * @property list<'STORAGE_CONNECTORS'|'STORAGE_CONNECTOR_HOMEFOLDERS'|'STORAGE_CONNECTOR_GOOGLE_DRIVE'|'STORAGE_CONNECTOR_ONE_DRIVE'|'REDIRECT_URL'|'FEEDBACK_URL'|'THEME_NAME'|'USER_SETTINGS'|'EMBED_HOST_DOMAINS'|'IAM_ROLE_ARN'|'ACCESS_ENDPOINTS'|'STREAMING_EXPERIENCE_SETTINGS'> $AttributesToDelete
 * @property list<Shapes\UserSetting> $UserSettings
 * @property Shapes\ApplicationSettings $ApplicationSettings
 * @property list<Shapes\AccessEndpoint> $AccessEndpoints
 * @property list<string> $EmbedHostDomains
 * @property Shapes\StreamingExperienceSettings $StreamingExperienceSettings
 */
class UpdateStackRequest extends Request
{
    /**
     * @param array{
     *     DisplayName?: string,
     *     Description?: string,
     *     Name: string,
     *     StorageConnectors?: list<Shapes\StorageConnector>,
     *     DeleteStorageConnectors?: bool,
     *     RedirectURL?: string,
     *     FeedbackURL?: string,
     *     AttributesToDelete?: list<'STORAGE_CONNECTORS'|'STORAGE_CONNECTOR_HOMEFOLDERS'|'STORAGE_CONNECTOR_GOOGLE_DRIVE'|'STORAGE_CONNECTOR_ONE_DRIVE'|'REDIRECT_URL'|'FEEDBACK_URL'|'THEME_NAME'|'USER_SETTINGS'|'EMBED_HOST_DOMAINS'|'IAM_ROLE_ARN'|'ACCESS_ENDPOINTS'|'STREAMING_EXPERIENCE_SETTINGS'>,
     *     UserSettings?: list<Shapes\UserSetting>,
     *     ApplicationSettings?: Shapes\ApplicationSettings,
     *     AccessEndpoints?: list<Shapes\AccessEndpoint>,
     *     EmbedHostDomains?: list<string>,
     *     StreamingExperienceSettings?: Shapes\StreamingExperienceSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
