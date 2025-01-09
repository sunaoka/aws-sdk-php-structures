<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL' $Action
 * @property string $Body
 * @property array<string, string> $Data
 * @property bool $SilentPush
 * @property array<string, list<string>> $Substitutions
 * @property string $Title
 * @property string $Url
 */
class DefaultPushNotificationMessage extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL',
     *     Body?: string,
     *     Data?: array<string, string>,
     *     SilentPush?: bool,
     *     Substitutions?: array<string, list<string>>,
     *     Title?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
