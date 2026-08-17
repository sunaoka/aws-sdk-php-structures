<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateExtractionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ExtractionDefinitionId
 * @property string $InstanceId
 * @property string $Name
 * @property Shapes\ExtractionConfiguration $ExtractionConfiguration
 * @property Shapes\ExtractionDefinitionDisplay|null $Display
 */
class UpdateExtractionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ExtractionDefinitionId: string,
     *     InstanceId: string,
     *     Name: string,
     *     ExtractionConfiguration: Shapes\ExtractionConfiguration,
     *     Display?: Shapes\ExtractionDefinitionDisplay|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
