<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property int|null $Size
 * @property string|null $Hash
 * @property 'Sha256'|null $HashType
 * @property string|null $Url
 */
class AttachmentContent extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Size?: int|null,
     *     Hash?: string|null,
     *     HashType?: 'Sha256'|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
