<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeHostKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $HostKeyId
 * @property string $HostKeyFingerprint
 * @property string $Description
 * @property string $Type
 * @property \Aws\Api\DateTimeResult $DateImported
 * @property list<Tag> $Tags
 */
class DescribedHostKey extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     HostKeyId?: string,
     *     HostKeyFingerprint?: string,
     *     Description?: string,
     *     Type?: string,
     *     DateImported?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
