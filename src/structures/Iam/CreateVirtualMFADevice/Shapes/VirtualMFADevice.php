<?php

namespace Sunaoka\Aws\Structures\Iam\CreateVirtualMFADevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SerialNumber
 * @property \Psr\Http\Message\StreamInterface $Base32StringSeed
 * @property \Psr\Http\Message\StreamInterface $QRCodePNG
 * @property User $User
 * @property \Aws\Api\DateTimeResult $EnableDate
 * @property list<Tag> $Tags
 */
class VirtualMFADevice extends Shape
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     Base32StringSeed?: \Psr\Http\Message\StreamInterface,
     *     QRCodePNG?: \Psr\Http\Message\StreamInterface,
     *     User?: User,
     *     EnableDate?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
