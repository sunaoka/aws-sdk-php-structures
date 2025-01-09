<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property string $DisplayName
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property list<StorageConnector> $StorageConnectors
 * @property string $RedirectURL
 * @property string $FeedbackURL
 * @property list<StackError> $StackErrors
 * @property list<UserSetting> $UserSettings
 * @property ApplicationSettingsResponse $ApplicationSettings
 * @property list<AccessEndpoint> $AccessEndpoints
 * @property list<string> $EmbedHostDomains
 * @property StreamingExperienceSettings $StreamingExperienceSettings
 */
class Stack extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name: string,
     *     Description?: string,
     *     DisplayName?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     StorageConnectors?: list<StorageConnector>,
     *     RedirectURL?: string,
     *     FeedbackURL?: string,
     *     StackErrors?: list<StackError>,
     *     UserSettings?: list<UserSetting>,
     *     ApplicationSettings?: ApplicationSettingsResponse,
     *     AccessEndpoints?: list<AccessEndpoint>,
     *     EmbedHostDomains?: list<string>,
     *     StreamingExperienceSettings?: StreamingExperienceSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
