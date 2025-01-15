<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $FeatureName
 * @property string|null $Description
 * @property list<Shapes\FeatureParameter>|null $ParameterAdditions
 * @property list<string>|null $ParameterRemovals
 */
class UpdateFeatureMetadataRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     FeatureName: string,
     *     Description?: string|null,
     *     ParameterAdditions?: list<Shapes\FeatureParameter>|null,
     *     ParameterRemovals?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
