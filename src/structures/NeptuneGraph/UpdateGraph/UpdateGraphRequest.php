<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\UpdateGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property bool|null $publicConnectivity
 * @property int<16, 24576>|null $provisionedMemory
 * @property bool|null $deletionProtection
 */
class UpdateGraphRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     publicConnectivity?: bool|null,
     *     provisionedMemory?: int<16, 24576>|null,
     *     deletionProtection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
