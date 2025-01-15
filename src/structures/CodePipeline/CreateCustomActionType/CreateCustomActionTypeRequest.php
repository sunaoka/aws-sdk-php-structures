<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreateCustomActionType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute' $category
 * @property string $provider
 * @property string $version
 * @property Shapes\ActionTypeSettings|null $settings
 * @property list<Shapes\ActionConfigurationProperty>|null $configurationProperties
 * @property Shapes\ArtifactDetails $inputArtifactDetails
 * @property Shapes\ArtifactDetails $outputArtifactDetails
 * @property list<Shapes\Tag>|null $tags
 */
class CreateCustomActionTypeRequest extends Request
{
    /**
     * @param array{
     *     category: 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute',
     *     provider: string,
     *     version: string,
     *     settings?: Shapes\ActionTypeSettings|null,
     *     configurationProperties?: list<Shapes\ActionConfigurationProperty>|null,
     *     inputArtifactDetails: Shapes\ArtifactDetails,
     *     outputArtifactDetails: Shapes\ArtifactDetails,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
