<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateLag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lagId
 * @property string|null $lagName
 * @property int|null $minimumLinks
 * @property string|null $encryptionMode
 */
class UpdateLagRequest extends Request
{
    /**
     * @param array{
     *     lagId: string,
     *     lagName?: string|null,
     *     minimumLinks?: int|null,
     *     encryptionMode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
