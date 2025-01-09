<?php

namespace Sunaoka\Aws\Structures\Iam\CreateVirtualMFADevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SerialNumber
 * @property string $Base32StringSeed
 * @property string $QRCodePNG
 * @property User $User
 * @property \Aws\Api\DateTimeResult $EnableDate
 * @property list<Tag> $Tags
 */
class VirtualMFADevice extends Shape
{
    /**
     * @param array{
     *     SerialNumber: string,
     *     Base32StringSeed?: string,
     *     QRCodePNG?: string,
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
