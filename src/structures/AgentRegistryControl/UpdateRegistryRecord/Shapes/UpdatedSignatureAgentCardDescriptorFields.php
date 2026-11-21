<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedDescriptorData|null $data
 * @property UpdatedDataSchemaVersion|null $dataSchemaVersion
 * @property UpdatedDescriptorSource|null $source
 * @property UpdatedSignatureAgentCardAdditionalData|null $additionalData
 */
class UpdatedSignatureAgentCardDescriptorFields extends Shape
{
    /**
     * @param array{
     *     data?: UpdatedDescriptorData|null,
     *     dataSchemaVersion?: UpdatedDataSchemaVersion|null,
     *     source?: UpdatedDescriptorSource|null,
     *     additionalData?: UpdatedSignatureAgentCardAdditionalData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
