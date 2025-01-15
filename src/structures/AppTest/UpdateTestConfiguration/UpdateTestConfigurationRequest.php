<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testConfigurationId
 * @property string|null $description
 * @property list<Shapes\Resource>|null $resources
 * @property array<string, string>|null $properties
 * @property Shapes\ServiceSettings|null $serviceSettings
 */
class UpdateTestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     testConfigurationId: string,
     *     description?: string|null,
     *     resources?: list<Shapes\Resource>|null,
     *     properties?: array<string, string>|null,
     *     serviceSettings?: Shapes\ServiceSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
