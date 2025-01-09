<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\UpdateGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property bool $publicConnectivity
 * @property int $provisionedMemory
 * @property bool $deletionProtection
 */
class UpdateGraphRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     publicConnectivity?: bool,
     *     provisionedMemory?: int,
     *     deletionProtection?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
