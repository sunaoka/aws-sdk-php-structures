<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConfigTypeData $configData
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateConfigRequest extends Request
{
    /**
     * @param array{
     *     configData: Shapes\ConfigTypeData,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
