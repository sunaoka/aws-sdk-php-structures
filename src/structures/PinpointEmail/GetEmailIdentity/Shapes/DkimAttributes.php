<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SigningEnabled
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'|null $Status
 * @property list<string>|null $Tokens
 */
class DkimAttributes extends Shape
{
    /**
     * @param array{
     *     SigningEnabled?: bool|null,
     *     Status?: 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED'|null,
     *     Tokens?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
