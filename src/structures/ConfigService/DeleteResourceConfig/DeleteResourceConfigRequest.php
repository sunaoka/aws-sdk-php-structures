<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceType
 * @property string $ResourceId
 */
class DeleteResourceConfigRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: string,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
