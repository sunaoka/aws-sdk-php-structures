<?php

namespace Sunaoka\Aws\Structures\Emr\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $LogGroup
 * @property string|null $LogStreamNamePrefix
 * @property string|null $EncryptionKeyArn
 * @property array<string, list<string>>|null $LogTypes
 */
class SessionCloudWatchLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     LogGroup?: string|null,
     *     LogStreamNamePrefix?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     LogTypes?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
