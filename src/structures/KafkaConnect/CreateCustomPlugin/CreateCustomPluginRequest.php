<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateCustomPlugin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'JAR'|'ZIP' $contentType
 * @property string $description
 * @property Shapes\CustomPluginLocation $location
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateCustomPluginRequest extends Request
{
    /**
     * @param array{
     *     contentType: 'JAR'|'ZIP',
     *     description?: string,
     *     location: Shapes\CustomPluginLocation,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
