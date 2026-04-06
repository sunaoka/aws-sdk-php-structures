<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateUserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'Disabled'|'Enabled' $copyAllowed
 * @property int<1, 600>|null $disconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $downloadAllowed
 * @property int<0, 60>|null $idleDisconnectTimeoutInMinutes
 * @property 'Disabled'|'Enabled' $pasteAllowed
 * @property 'Disabled'|'Enabled' $printAllowed
 * @property list<Shapes\Tag>|null $tags
 * @property 'Disabled'|'Enabled' $uploadAllowed
 */
class CreateUserSettingsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     copyAllowed: 'Disabled'|'Enabled',
     *     disconnectTimeoutInMinutes?: int<1, 600>|null,
     *     downloadAllowed: 'Disabled'|'Enabled',
     *     idleDisconnectTimeoutInMinutes?: int<0, 60>|null,
     *     pasteAllowed: 'Disabled'|'Enabled',
     *     printAllowed: 'Disabled'|'Enabled',
     *     tags?: list<Shapes\Tag>|null,
     *     uploadAllowed: 'Disabled'|'Enabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
