<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrialName
 * @property string|null $DisplayName
 * @property string $ExperimentName
 * @property Shapes\MetadataProperties|null $MetadataProperties
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTrialRequest extends Request
{
    /**
     * @param array{
     *     TrialName: string,
     *     DisplayName?: string|null,
     *     ExperimentName: string,
     *     MetadataProperties?: Shapes\MetadataProperties|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
