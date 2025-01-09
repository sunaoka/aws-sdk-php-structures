<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateFeature;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\VariationConfig> $addOrUpdateVariations
 * @property string $defaultVariation
 * @property string $description
 * @property array<string, string> $entityOverrides
 * @property 'ALL_RULES'|'DEFAULT_VARIATION' $evaluationStrategy
 * @property string $feature
 * @property string $project
 * @property list<string> $removeVariations
 */
class UpdateFeatureRequest extends Request
{
    /**
     * @param array{
     *     addOrUpdateVariations?: list<Shapes\VariationConfig>,
     *     defaultVariation?: string,
     *     description?: string,
     *     entityOverrides?: array<string, string>,
     *     evaluationStrategy?: 'ALL_RULES'|'DEFAULT_VARIATION',
     *     feature: string,
     *     project: string,
     *     removeVariations?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
