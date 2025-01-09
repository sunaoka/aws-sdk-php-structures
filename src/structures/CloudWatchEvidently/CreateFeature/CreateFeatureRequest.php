<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateFeature;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $defaultVariation
 * @property string $description
 * @property array<string, string> $entityOverrides
 * @property 'ALL_RULES'|'DEFAULT_VARIATION' $evaluationStrategy
 * @property string $name
 * @property string $project
 * @property array<string, string> $tags
 * @property list<Shapes\VariationConfig> $variations
 */
class CreateFeatureRequest extends Request
{
    /**
     * @param array{
     *     defaultVariation?: string,
     *     description?: string,
     *     entityOverrides?: array<string, string>,
     *     evaluationStrategy?: 'ALL_RULES'|'DEFAULT_VARIATION',
     *     name: string,
     *     project: string,
     *     tags?: array<string, string>,
     *     variations: list<Shapes\VariationConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
