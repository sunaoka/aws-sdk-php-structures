<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreateCustomActionType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute' $category
 * @property string $provider
 * @property string $version
 * @property Shapes\ActionTypeSettings $settings
 * @property list<Shapes\ActionConfigurationProperty> $configurationProperties
 * @property Shapes\ArtifactDetails $inputArtifactDetails
 * @property Shapes\ArtifactDetails $outputArtifactDetails
 * @property list<Shapes\Tag> $tags
 */
class CreateCustomActionTypeRequest extends Request
{
    /**
     * @param array{
     *     category: 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute',
     *     provider: string,
     *     version: string,
     *     settings?: Shapes\ActionTypeSettings,
     *     configurationProperties?: list<Shapes\ActionConfigurationProperty>,
     *     inputArtifactDetails: Shapes\ArtifactDetails,
     *     outputArtifactDetails: Shapes\ArtifactDetails,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
