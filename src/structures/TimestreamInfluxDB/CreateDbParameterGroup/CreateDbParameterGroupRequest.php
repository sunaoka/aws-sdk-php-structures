<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\Parameters|null $parameters
 * @property array<string, string>|null $tags
 */
class CreateDbParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     parameters?: Shapes\Parameters|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
