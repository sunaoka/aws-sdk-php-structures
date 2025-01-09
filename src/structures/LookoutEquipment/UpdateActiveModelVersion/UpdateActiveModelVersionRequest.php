<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateActiveModelVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property int<1, max> $ModelVersion
 */
class UpdateActiveModelVersionRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     ModelVersion: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
