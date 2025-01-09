<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testConfigurationId
 * @property string $description
 * @property list<Shapes\Resource> $resources
 * @property array<string, string> $properties
 * @property Shapes\ServiceSettings $serviceSettings
 */
class UpdateTestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     testConfigurationId: string,
     *     description?: string,
     *     resources?: list<Shapes\Resource>,
     *     properties?: array<string, string>,
     *     serviceSettings?: Shapes\ServiceSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
