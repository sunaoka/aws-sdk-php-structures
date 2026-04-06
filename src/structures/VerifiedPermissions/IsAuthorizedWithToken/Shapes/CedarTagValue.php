<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorizedWithToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $boolean
 * @property EntityIdentifier|null $entityIdentifier
 * @property int|null $long
 * @property string|null $string
 * @property list<CedarTagValue>|null $set
 * @property array<string, CedarTagValue>|null $record
 * @property string|null $ipaddr
 * @property string|null $decimal
 * @property string|null $datetime
 * @property string|null $duration
 */
class CedarTagValue extends Shape
{
    /**
     * @param array{
     *     boolean?: bool|null,
     *     entityIdentifier?: EntityIdentifier|null,
     *     long?: int|null,
     *     string?: string|null,
     *     set?: list<CedarTagValue>|null,
     *     record?: array<string, CedarTagValue>|null,
     *     ipaddr?: string|null,
     *     decimal?: string|null,
     *     datetime?: string|null,
     *     duration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
