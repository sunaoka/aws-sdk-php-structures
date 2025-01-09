<?php

namespace Sunaoka\Aws\Structures\SupportApp\ListSlackChannelConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelId
 * @property string $channelName
 * @property string $channelRoleArn
 * @property bool $notifyOnAddCorrespondenceToCase
 * @property 'none'|'all'|'high' $notifyOnCaseSeverity
 * @property bool $notifyOnCreateOrReopenCase
 * @property bool $notifyOnResolveCase
 * @property string $teamId
 */
class SlackChannelConfiguration extends Shape
{
    /**
     * @param array{
     *     channelId: string,
     *     channelName?: string,
     *     channelRoleArn?: string,
     *     notifyOnAddCorrespondenceToCase?: bool,
     *     notifyOnCaseSeverity?: 'none'|'all'|'high',
     *     notifyOnCreateOrReopenCase?: bool,
     *     notifyOnResolveCase?: bool,
     *     teamId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
