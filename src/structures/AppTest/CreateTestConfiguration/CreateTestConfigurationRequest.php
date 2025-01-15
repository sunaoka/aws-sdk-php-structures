<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Resource> $resources
 * @property array<string, string>|null $properties
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property Shapes\ServiceSettings|null $serviceSettings
 */
class CreateTestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     resources: list<Shapes\Resource>,
     *     properties?: array<string, string>|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     serviceSettings?: Shapes\ServiceSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
