<?php

namespace Sunaoka\Aws\Structures\Connect\CreateExtractionDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $InstanceId
 * @property string $Name
 * @property Shapes\ExtractionConfiguration $ExtractionConfiguration
 * @property Shapes\ExtractionDefinitionDisplay|null $Display
 * @property array<string, string>|null $Tags
 */
class CreateExtractionDefinitionRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     InstanceId: string,
     *     Name: string,
     *     ExtractionConfiguration: Shapes\ExtractionConfiguration,
     *     Display?: Shapes\ExtractionDefinitionDisplay|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
