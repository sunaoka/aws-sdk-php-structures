<?php

namespace Sunaoka\Aws\Structures\Transfer\ListHostKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $HostKeyId
 * @property string $Fingerprint
 * @property string $Description
 * @property string $Type
 * @property \Aws\Api\DateTimeResult $DateImported
 */
class ListedHostKey extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     HostKeyId?: string,
     *     Fingerprint?: string,
     *     Description?: string,
     *     Type?: string,
     *     DateImported?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
