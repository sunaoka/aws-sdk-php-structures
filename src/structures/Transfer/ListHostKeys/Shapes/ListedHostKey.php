<?php

namespace Sunaoka\Aws\Structures\Transfer\ListHostKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $HostKeyId
 * @property string|null $Fingerprint
 * @property string|null $Description
 * @property string|null $Type
 * @property \Aws\Api\DateTimeResult|null $DateImported
 */
class ListedHostKey extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     HostKeyId?: string|null,
     *     Fingerprint?: string|null,
     *     Description?: string|null,
     *     Type?: string|null,
     *     DateImported?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
