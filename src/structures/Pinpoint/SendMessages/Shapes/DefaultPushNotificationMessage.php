<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL'|null $Action
 * @property string|null $Body
 * @property array<string, string>|null $Data
 * @property bool|null $SilentPush
 * @property array<string, list<string>>|null $Substitutions
 * @property string|null $Title
 * @property string|null $Url
 */
class DefaultPushNotificationMessage extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL'|null,
     *     Body?: string|null,
     *     Data?: array<string, string>|null,
     *     SilentPush?: bool|null,
     *     Substitutions?: array<string, list<string>>|null,
     *     Title?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
