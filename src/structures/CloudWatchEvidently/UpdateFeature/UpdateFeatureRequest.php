<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateFeature;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\VariationConfig>|null $addOrUpdateVariations
 * @property string|null $defaultVariation
 * @property string|null $description
 * @property array<string, string>|null $entityOverrides
 * @property 'ALL_RULES'|'DEFAULT_VARIATION'|null $evaluationStrategy
 * @property string $feature
 * @property string $project
 * @property list<string>|null $removeVariations
 */
class UpdateFeatureRequest extends Request
{
    /**
     * @param array{
     *     addOrUpdateVariations?: list<Shapes\VariationConfig>|null,
     *     defaultVariation?: string|null,
     *     description?: string|null,
     *     entityOverrides?: array<string, string>|null,
     *     evaluationStrategy?: 'ALL_RULES'|'DEFAULT_VARIATION'|null,
     *     feature: string,
     *     project: string,
     *     removeVariations?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
