<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Size
 * @property string $Hash
 * @property 'Sha256' $HashType
 * @property string $Url
 */
class AttachmentContent extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Size?: int,
     *     Hash?: string,
     *     HashType?: 'Sha256',
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
