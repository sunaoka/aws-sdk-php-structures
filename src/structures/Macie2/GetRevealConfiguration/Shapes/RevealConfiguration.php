<?php

namespace Sunaoka\Aws\Structures\Macie2\GetRevealConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 * @property 'ENABLED'|'DISABLED' $status
 */
class RevealConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string|null,
     *     status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
