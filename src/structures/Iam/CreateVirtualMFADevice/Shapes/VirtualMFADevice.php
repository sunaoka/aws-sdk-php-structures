<?php

namespace Sunaoka\Aws\Structures\Iam\CreateVirtualMFADevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SerialNumber
 * @property \Psr\Http\Message\StreamInterface|null $Base32StringSeed
 * @property \Psr\Http\Message\StreamInterface|null $QRCodePNG
 * @property User|null $User
 * @property \Aws\Api\DateTimeResult|null $EnableDate
 * @property list<Tag>|null $Tags
 */
class VirtualMFADevice extends Shape
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     Base32StringSeed?: \Psr\Http\Message\StreamInterface|null,
     *     QRCodePNG?: \Psr\Http\Message\StreamInterface|null,
     *     User?: User|null,
     *     EnableDate?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
