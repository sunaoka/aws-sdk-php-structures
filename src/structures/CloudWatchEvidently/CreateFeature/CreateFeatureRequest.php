<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateFeature;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $defaultVariation
 * @property string|null $description
 * @property array<string, string>|null $entityOverrides
 * @property 'ALL_RULES'|'DEFAULT_VARIATION'|null $evaluationStrategy
 * @property string $name
 * @property string $project
 * @property array<string, string>|null $tags
 * @property list<Shapes\VariationConfig> $variations
 */
class CreateFeatureRequest extends Request
{
    /**
     * @param array{
     *     defaultVariation?: string|null,
     *     description?: string|null,
     *     entityOverrides?: array<string, string>|null,
     *     evaluationStrategy?: 'ALL_RULES'|'DEFAULT_VARIATION'|null,
     *     name: string,
     *     project: string,
     *     tags?: array<string, string>|null,
     *     variations: list<Shapes\VariationConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
