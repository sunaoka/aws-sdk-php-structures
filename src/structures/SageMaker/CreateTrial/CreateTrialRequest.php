<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialName
 * @property string $DisplayName
 * @property string $ExperimentName
 * @property Shapes\MetadataProperties $MetadataProperties
 * @property list<Shapes\Tag> $Tags
 */
class CreateTrialRequest extends Request
{
    /**
     * @param array{
     *     TrialName: string,
     *     DisplayName?: string,
     *     ExperimentName: string,
     *     MetadataProperties?: Shapes\MetadataProperties,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
