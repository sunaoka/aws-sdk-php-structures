<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeHostKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $HostKeyId
 * @property string|null $HostKeyFingerprint
 * @property string|null $Description
 * @property string|null $Type
 * @property \Aws\Api\DateTimeResult|null $DateImported
 * @property list<Tag>|null $Tags
 */
class DescribedHostKey extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     HostKeyId?: string|null,
     *     HostKeyFingerprint?: string|null,
     *     Description?: string|null,
     *     Type?: string|null,
     *     DateImported?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
