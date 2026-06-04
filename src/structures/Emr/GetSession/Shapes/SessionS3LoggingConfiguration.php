<?php

namespace Sunaoka\Aws\Structures\Emr\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $LogUri
 * @property string|null $EncryptionKeyArn
 * @property array<string, list<string>>|null $LogTypes
 */
class SessionS3LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     LogUri?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     LogTypes?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
