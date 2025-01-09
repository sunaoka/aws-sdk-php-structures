<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $FeatureName
 * @property string $Description
 * @property list<Shapes\FeatureParameter> $ParameterAdditions
 * @property list<string> $ParameterRemovals
 */
class UpdateFeatureMetadataRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     FeatureName: string,
     *     Description?: string,
     *     ParameterAdditions?: list<Shapes\FeatureParameter>,
     *     ParameterRemovals?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
