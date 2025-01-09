<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $DisplayName
 * @property list<Shapes\StorageConnector> $StorageConnectors
 * @property string $RedirectURL
 * @property string $FeedbackURL
 * @property list<Shapes\UserSetting> $UserSettings
 * @property Shapes\ApplicationSettings $ApplicationSettings
 * @property array<string, string> $Tags
 * @property list<Shapes\AccessEndpoint> $AccessEndpoints
 * @property list<string> $EmbedHostDomains
 * @property Shapes\StreamingExperienceSettings $StreamingExperienceSettings
 */
class CreateStackRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     DisplayName?: string,
     *     StorageConnectors?: list<Shapes\StorageConnector>,
     *     RedirectURL?: string,
     *     FeedbackURL?: string,
     *     UserSettings?: list<Shapes\UserSetting>,
     *     ApplicationSettings?: Shapes\ApplicationSettings,
     *     Tags?: array<string, string>,
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
