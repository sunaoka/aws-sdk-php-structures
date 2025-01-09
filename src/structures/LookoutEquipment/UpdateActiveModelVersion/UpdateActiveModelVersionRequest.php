<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateActiveModelVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property int $ModelVersion
 */
class UpdateActiveModelVersionRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     ModelVersion: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
