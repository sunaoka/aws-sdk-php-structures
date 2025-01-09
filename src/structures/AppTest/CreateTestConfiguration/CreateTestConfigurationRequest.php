<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\Resource> $resources
 * @property array<string, string> $properties
 * @property string $clientToken
 * @property array<string, string> $tags
 * @property Shapes\ServiceSettings $serviceSettings
 */
class CreateTestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     resources: list<Shapes\Resource>,
     *     properties?: array<string, string>,
     *     clientToken?: string,
     *     tags?: array<string, string>,
     *     serviceSettings?: Shapes\ServiceSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
