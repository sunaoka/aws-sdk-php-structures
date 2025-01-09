<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property Shapes\Parameters $parameters
 * @property array<string, string> $tags
 */
class CreateDbParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     parameters?: Shapes\Parameters,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
