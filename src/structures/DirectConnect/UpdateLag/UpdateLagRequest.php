<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateLag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lagId
 * @property string $lagName
 * @property int $minimumLinks
 * @property string $encryptionMode
 */
class UpdateLagRequest extends Request
{
    /**
     * @param array{
     *     lagId: string,
     *     lagName?: string,
     *     minimumLinks?: int,
     *     encryptionMode?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
