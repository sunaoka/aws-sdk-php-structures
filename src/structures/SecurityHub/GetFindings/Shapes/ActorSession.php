<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property 'ENABLED'|'DISABLED' $MfaStatus
 * @property int $CreatedTime
 * @property string $Issuer
 */
class ActorSession extends Shape
{
    /**
     * @param array{
     *     Uid?: string,
     *     MfaStatus?: 'ENABLED'|'DISABLED',
     *     CreatedTime?: int,
     *     Issuer?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
