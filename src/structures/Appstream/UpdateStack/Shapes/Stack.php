<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string $Name
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property list<StorageConnector>|null $StorageConnectors
 * @property string|null $RedirectURL
 * @property string|null $FeedbackURL
 * @property list<StackError>|null $StackErrors
 * @property list<UserSetting>|null $UserSettings
 * @property ApplicationSettingsResponse|null $ApplicationSettings
 * @property list<AccessEndpoint>|null $AccessEndpoints
 * @property list<string>|null $EmbedHostDomains
 * @property StreamingExperienceSettings|null $StreamingExperienceSettings
 */
class Stack extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     StorageConnectors?: list<StorageConnector>|null,
     *     RedirectURL?: string|null,
     *     FeedbackURL?: string|null,
     *     StackErrors?: list<StackError>|null,
     *     UserSettings?: list<UserSetting>|null,
     *     ApplicationSettings?: ApplicationSettingsResponse|null,
     *     AccessEndpoints?: list<AccessEndpoint>|null,
     *     EmbedHostDomains?: list<string>|null,
     *     StreamingExperienceSettings?: StreamingExperienceSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
