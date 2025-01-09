<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListInfrastructureConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property string $dateCreated
 * @property string $dateUpdated
 * @property array<string, string> $resourceTags
 * @property array<string, string> $tags
 * @property list<string> $instanceTypes
 * @property string $instanceProfileName
 * @property Placement $placement
 */
class InfrastructureConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     dateCreated?: string,
     *     dateUpdated?: string,
     *     resourceTags?: array<string, string>,
     *     tags?: array<string, string>,
     *     instanceTypes?: list<string>,
     *     instanceProfileName?: string,
     *     placement?: Placement
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
