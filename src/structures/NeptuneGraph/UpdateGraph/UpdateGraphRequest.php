<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\UpdateGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property bool|null $publicConnectivity
 * @property int<1, 24576>|null $provisionedMemory
 * @property Shapes\ComputeConfiguration|null $computeConfiguration
 * @property bool|null $deletionProtection
 */
class UpdateGraphRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     publicConnectivity?: bool|null,
     *     provisionedMemory?: int<1, 24576>|null,
     *     computeConfiguration?: Shapes\ComputeConfiguration|null,
     *     deletionProtection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
