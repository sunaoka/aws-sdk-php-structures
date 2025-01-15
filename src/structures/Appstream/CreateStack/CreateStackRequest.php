<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property list<Shapes\StorageConnector>|null $StorageConnectors
 * @property string|null $RedirectURL
 * @property string|null $FeedbackURL
 * @property list<Shapes\UserSetting>|null $UserSettings
 * @property Shapes\ApplicationSettings|null $ApplicationSettings
 * @property array<string, string>|null $Tags
 * @property list<Shapes\AccessEndpoint>|null $AccessEndpoints
 * @property list<string>|null $EmbedHostDomains
 * @property Shapes\StreamingExperienceSettings|null $StreamingExperienceSettings
 */
class CreateStackRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     StorageConnectors?: list<Shapes\StorageConnector>|null,
     *     RedirectURL?: string|null,
     *     FeedbackURL?: string|null,
     *     UserSettings?: list<Shapes\UserSetting>|null,
     *     ApplicationSettings?: Shapes\ApplicationSettings|null,
     *     Tags?: array<string, string>|null,
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
