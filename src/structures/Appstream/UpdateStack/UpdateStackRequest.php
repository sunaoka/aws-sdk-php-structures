<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property string $Name
 * @property list<Shapes\StorageConnector>|null $StorageConnectors
 * @property bool|null $DeleteStorageConnectors
 * @property string|null $RedirectURL
 * @property string|null $FeedbackURL
 * @property list<'STORAGE_CONNECTORS'|'STORAGE_CONNECTOR_HOMEFOLDERS'|'STORAGE_CONNECTOR_GOOGLE_DRIVE'|'STORAGE_CONNECTOR_ONE_DRIVE'|'REDIRECT_URL'|'FEEDBACK_URL'|'THEME_NAME'|'USER_SETTINGS'|'EMBED_HOST_DOMAINS'|'IAM_ROLE_ARN'|'ACCESS_ENDPOINTS'|'STREAMING_EXPERIENCE_SETTINGS'>|null $AttributesToDelete
 * @property list<Shapes\UserSetting>|null $UserSettings
 * @property Shapes\ApplicationSettings|null $ApplicationSettings
 * @property list<Shapes\AccessEndpoint>|null $AccessEndpoints
 * @property list<string>|null $EmbedHostDomains
 * @property Shapes\StreamingExperienceSettings|null $StreamingExperienceSettings
 */
class UpdateStackRequest extends Request
{
    /**
     * @param array{
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     Name: string,
     *     StorageConnectors?: list<Shapes\StorageConnector>|null,
     *     DeleteStorageConnectors?: bool|null,
     *     RedirectURL?: string|null,
     *     FeedbackURL?: string|null,
     *     AttributesToDelete?: list<'STORAGE_CONNECTORS'|'STORAGE_CONNECTOR_HOMEFOLDERS'|'STORAGE_CONNECTOR_GOOGLE_DRIVE'|'STORAGE_CONNECTOR_ONE_DRIVE'|'REDIRECT_URL'|'FEEDBACK_URL'|'THEME_NAME'|'USER_SETTINGS'|'EMBED_HOST_DOMAINS'|'IAM_ROLE_ARN'|'ACCESS_ENDPOINTS'|'STREAMING_EXPERIENCE_SETTINGS'>|null,
     *     UserSettings?: list<Shapes\UserSetting>|null,
     *     ApplicationSettings?: Shapes\ApplicationSettings|null,
     *     AccessEndpoints?: list<Shapes\AccessEndpoint>|null,
     *     EmbedHostDomains?: list<string>|null,
     *     StreamingExperienceSettings?: Shapes\StreamingExperienceSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
