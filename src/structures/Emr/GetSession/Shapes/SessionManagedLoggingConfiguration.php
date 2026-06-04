<?php

namespace Sunaoka\Aws\Structures\Emr\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $EncryptionKeyArn
 */
class SessionManagedLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     EncryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
