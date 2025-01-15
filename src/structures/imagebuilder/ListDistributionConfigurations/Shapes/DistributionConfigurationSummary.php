<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListDistributionConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $dateCreated
 * @property string|null $dateUpdated
 * @property array<string, string>|null $tags
 * @property list<string>|null $regions
 */
class DistributionConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     dateCreated?: string|null,
     *     dateUpdated?: string|null,
     *     tags?: array<string, string>|null,
     *     regions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
