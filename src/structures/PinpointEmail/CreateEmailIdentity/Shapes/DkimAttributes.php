<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $SigningEnabled
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED' $Status
 * @property list<string> $Tokens
 */
class DkimAttributes extends Shape
{
    /**
     * @param array{
     *     SigningEnabled?: bool,
     *     Status?: 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE'|'NOT_STARTED',
     *     Tokens?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
