<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListInfrastructureConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $dateCreated
 * @property string|null $dateUpdated
 * @property array<string, string>|null $resourceTags
 * @property array<string, string>|null $tags
 * @property list<string>|null $instanceTypes
 * @property string|null $instanceProfileName
 * @property Placement|null $placement
 */
class InfrastructureConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     dateCreated?: string|null,
     *     dateUpdated?: string|null,
     *     resourceTags?: array<string, string>|null,
     *     tags?: array<string, string>|null,
     *     instanceTypes?: list<string>|null,
     *     instanceProfileName?: string|null,
     *     placement?: Placement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
