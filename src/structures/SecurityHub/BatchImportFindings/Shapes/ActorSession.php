<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Uid
 * @property 'ENABLED'|'DISABLED'|null $MfaStatus
 * @property int|null $CreatedTime
 * @property string|null $Issuer
 */
class ActorSession extends Shape
{
    /**
     * @param array{
     *     Uid?: string|null,
     *     MfaStatus?: 'ENABLED'|'DISABLED'|null,
     *     CreatedTime?: int|null,
     *     Issuer?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
